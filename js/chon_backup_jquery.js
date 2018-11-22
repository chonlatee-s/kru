$(document).ready(function(){
	$('#sl').hide();
	$('#btn_st').hide();
	$('.online').hide();
	$('#sl').fadeIn(1000);
	$('#btn_st').fadeIn(2000);
	$('#slc').popover("hide"); 
	$('#c2').popover("show"); 

	$('#btn_st').click(function(event){
		if( $('#slc').val() == "xxx" ) $('#slc').popover("show");
	});
//////////////////////////////////END PAGE TEST////////////////////////////////
	$("#al1").alert();
	$("#al2").hide();
	$('#checkAnswer').hide();
	$('#1').slideDown(1000);

	$('#b1').click(function(event){
		$('.online').hide();	$('#1').show(); 
	});
	$('#b2').click(function(event){
		$('.online').hide();	$('#2').show();
	});
	$('#b3').click(function(event){
		$('.online').hide();	$('#3').show();
	});
	$('#b4').click(function(event){
		$('.online').hide();	$('#4').show();
	});
	$('#b5').click(function(event){
		$('.online').hide();	$('#5').show();
	});
	$('#b6').click(function(event){
		$('.online').hide();	$('#6').show();
	});
	$('#b7').click(function(event){
		$('.online').hide();	$('#7').show();
	});
	$('#b8').click(function(event){
		$('.online').hide();	$('#8').show();
	});
	$('#b9').click(function(event){
		$('.online').hide();	$('#9').show();
	});
	$('#b10').click(function(event){
		$('.online').hide();	$('#10').show();	
	});

// check answer
	function checkPercent(){
		var percent = 0;
		for(i=1;i<=10;i++){
			if($('#A'+i).prop( "checked" )==true) percent+=10;
			else if($('#B'+i).prop( "checked" )==true) percent+=10;
			else if($('#C'+i).prop( "checked" )==true) percent+=10;
			else if($('#D'+i).prop( "checked" )==true) percent+=10;
			else{
				percent += 0;
			}
		}
		if(percent==10){$("#percent").removeClass("progress-bar").addClass("progress-bar progress-bar-striped progress-bar-animated bg-danger"); }
		if(percent==40){$("#percent").removeClass("bg-danger").addClass("progress-bar progress-bar-striped progress-bar-animated bg-warning"); }
		if(percent==70){$("#percent").removeClass("bg-warning").addClass("progress-bar progress-bar-striped progress-bar-animated bg-success"); }
		$("#percent").css("width", percent+"%");
		$("#percent").html(percent+"%");
	}

	// var sum=[], count=[];
	$('#checkAnswer').click(function(event){
		// for(i=1;i<=10;i++){
		// 	if($('#A'+i).prop( "checked" )==true) sum=1;
		// 	else if($('#B'+i).prop( "checked" )==true) sum=1;
		// 	else if($('#C'+i).prop( "checked" )==true) sum=1; 
		// 	else if($('#D'+i).prop( "checked" )==true) sum=1;
		// 	else sum=0;
		// 	count[i-1]=sum;
		// }
		// for(s=0;s<10;s++){
		// 	if(count[s]==0){
		// 		showMES();
		// 		break;
		// 	}else{
		// 		if(s==9) {
					var xx=showMES();
					if(xx==1){ myStopFunction();  sendAnswer(); }
		// 		}
		// 	}
		// }
	});

	$('.showMessage').click(function(event){
		showMES();
	});
	function showMES(){
		var wrong ="",c=[],sa=0;

		for(i=1;i<=10;i++){
			if($('#A'+i).prop( "checked" )==true) sa=1;
			else if($('#B'+i).prop( "checked" )==true) sa=1;
			else if($('#C'+i).prop( "checked" )==true) sa=1; 
			else if($('#D'+i).prop( "checked" )==true) sa=1;
			else sa=0;
			c[i-1]=sa;
		}

		for(s=0;s<10;s++){
			if(c[s]==0) wrong += (s+1).toString()+"  ";
			if(s==9){
				$("#al2").show();
				$("#al1").hide();
				if(wrong!="")$('#mes').html('<b>แจ้งเตือน</b> คุณยังไม่ได้ทำข้อที่ '+wrong);
				else {
					$('#mes').html('<b>แจ้งเตือน</b> คุณทำข้อสอบครบแล้ว กรุณากดปุ่มตรวจคำตอบ'); 
					return 1;
				}
			}
		}
	}

	var xxx =100; //เอาไว้เช็คว่ากดปุ่มส่งไปหรือยัง เพื่อไม่ให้ส่งอีกตอนหมดเวลา

	function sendAnswer(){
		var data = [], correct=0; newData=[];

		for(i=1;i<=10;i++){
			if($('#A'+i).prop( "checked" )==true){
				data.push({ id:$('#A'+i).next().next().val(), answer:$('#A'+i).val(), user_select:$('#A'+i).next().val() })
			}
			else if($('#B'+i).prop( "checked" )==true){
				data.push({ id:$('#B'+i).next().next().val(), answer:$('#B'+i).val(),  user_select:$('#B'+i).next().val() })
			}
			else if($('#C'+i).prop( "checked" )==true){
				data.push({ id:$('#C'+i).next().next().val(), answer:$('#C'+i).val(),  user_select:$('#C'+i).next().val() })
			}
			else if($('#D'+i).prop( "checked" )==true){
				data.push({ id:$('#D'+i).next().next().val(), answer:$('#D'+i).val(),  user_select:$('#D'+i).next().val() })
			}
			else {data.push({id:$('#A'+i).next().next().val(),answer:'0', user_select:'ไม่ได้ตอบคำถาม'})}
			//
		}

		$.post("../kru/checkAnswer.php", { data: data }, function (dataAll, status, xhr){
			if(status=="success"){
				if(dataAll != null) {
					score = $.parseJSON(dataAll);

					for(i=0;i<10;i++){ // order by new HAHAHA
						for(ii=0;ii<10;ii++){
							if(data[i].id == score[ii].id) {
								//check correct between id and answer
								if(data[i].answer==score[ii].answer) {
									correct = correct+1;
									newData.push({ 
										id:score[ii].id, 
										question:score[ii].question, 
										answer:score[ii].answer,
										ch:score[ii].ch,
										ref:score[ii].ref,
										user_select:data[i].user_select,
										answer_user:1
									})
								}else{
									newData.push({ 
										id:score[ii].id, 
										question:score[ii].question, 
										answer:score[ii].answer,
										ch:score[ii].ch,
										ref:score[ii].ref,
										user_select:data[i].user_select,
										answer_user:0
									})
								}

							}
						}
					}
					xxx = correct;//เพื่อให้รู้ว่ากดปุ่มส่งแล้ว
					showSCORE(newData,correct);

				}else alert('Something Wrong!!!');
			}else{
				alert("Something Wrong!!!");
			}
		});
	}
// next and prev
	$('#show').on('click','.containerX',function(){
		checkPercent();
		var x = parseInt($(this).attr('id'));
		if((x+1)<=10){
			$('.online').hide();
			$('#'+(x+1)).show();
		}
		checkEverthingBeforeSend();
	});

	function checkEverthingBeforeSend(){
		var count=[],sum=0;
		for(i=1;i<=10;i++){
			if($('#A'+i).prop( "checked" )==true) sum=1;
			else if($('#B'+i).prop( "checked" )==true) sum=1;
			else if($('#C'+i).prop( "checked" )==true) sum=1; 
			else if($('#D'+i).prop( "checked" )==true) sum=1;
			else sum=0;
			count[i-1]=sum;
		}
		for(s=0;s<10;s++){
			if(count[s]==0) break;
			else{
				if(s==9) $('#checkAnswer').fadeIn(1000);
			}
		}
	}

// show score and END
	$('#showEnd').hide();
	$('#c2').popover("hide");
	$('#show_ans_all').hide();

	$('#btn_show_answer').click(function(event){
		$('#show_ans_all').slideToggle(1000);
	});

	function showSCORE(data,score){
		var show_ans_all="";

		$('#overall').hide();
		$('#showEnd').show();
		$('#c2').popover("show");
		$('#show_score').html(score+"/10");

		for(i=0;i<data.length;i++){
			show_ans_all += '<p class="topic_result">ข้อที่ '+(i+1)+" "+data[i].question+'</p>';
			show_ans_all += '<p class="result"><b><u>ตอบ</u></b> '+data[i].user_select+'</p>';
			if(data[i].answer_user==0){show_ans_all += '<i><p class="result" style="color:#FF6347"><b><u>เฉลย</u></b> '+data[i].ch+'</p></i>'};
			
			if(data[i].answer_user==0){
				if(data[i].ref!=""){show_ans_all += '<p class="float-right ref_text">&#10007;&nbsp;<a href="'+data[i].ref+'" target="_blank">อ้างอิง</a></p><hr>';}
				else show_ans_all += '<p class="float-right ref_text">&#10007;&nbsp;อ้างอิง</p><hr>';
			}
			else{
				if(data[i].ref=="") show_ans_all += '<p class="float-right ref_text">&#10003;&nbsp;<a href="'+data[i].ref+'" target="_blank">อ้างอิง</a></p><hr>';
				else show_ans_all += '<p class="float-right ref_text">&#10003;&nbsp;อ้างอิง</p><hr>';
			}
		}
		show_ans_all +='<span style="font-size:14px; color:#3385ff">หมายเหตุ จะมีเฉลยเฉพาะข้อที่ตอบผิดเท่านั้น</span>';
		$('#show_ans_all').html(show_ans_all);

	if(score <= 3)$('#report_txt').html("ลองทำดูอีกสักรอบดีไหม สู้ ๆ");
		else if(score <= 6) $('#report_txt').html("มาได้ครึ่งทางได้แล้ว พยามยามอีกนิดดีขึ้นแน่นอน สู้ ๆ");
		else if(score <= 8) $('#report_txt').html("ความฝันของคุณใกล้จะเป็นจริงแล้ว");
		else $('#report_txt').html("ยินดีด้วยครับ คะแนนของคุณสูงมาก ๆ อาจจะสอบผ่านในรอบนี้ก็ได้นะ แต่ก็อย่าลืมหมั่นทบทวนบ่อย ๆ นะครับ");
	}
// time
	var myVar = setInterval(myTimer, 1000);
	var m = 0, sec = 5;
	function myTimer() {
		if (sec != 0) sec = sec - 1;
		else {
			if (m == 0) { 
				myStopFunction(); 
				if(xxx==100){ sendAnswer(); alert('หมดเวลาในการทำแบบทดสอบ'); }
			}
			m = m - 1; sec = 60;
		}
		if(m== (-1) ) $(".xzyTime").html("หมดเวลาในการทำแบบทดสอบ");
		else {
			if(m==0) $(".xzyTime").html('เหลือเวลา '+sec+" วินาที");
			else $(".xzyTime").html('เหลือเวลา '+m+" นาที "+sec+" วินาที");
		}
	}

	function myStopFunction() {
		clearInterval(myVar);
	}

//ohter pages
	$('#tableAgenda').hide();
	$('#tableAgenda').fadeIn(2000);
	$('#apply').hide();
	$('#apply').fadeIn(2000);
	$('#notify').hide();
	$('#notify').fadeIn(2000);
	$('.abc').hide();
	$('.abc').fadeIn(2000);
//
	$('#p1').hide();$('#p2').hide();$('#p3').hide();
	$('#l1').click(function(event){
		$('#p1').show(); $('#p2').hide(); $('#p3').hide();
		event.preventDefault();
		var targetOffset = $('#p1').offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
	});
	$('#l2').click(function(event){
		$('#p2').show(); $('#p1').hide();$('#p3').hide();
		event.preventDefault();
		var targetOffset = $('#p2').offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
	});
	$('#l3').click(function(event){
		$('#p3').show(); $('#p1').hide();$('#p2').hide();
		event.preventDefault();
		var targetOffset = $('#p3').offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
	});

	$('#aboutme').popover("show");
});
// ไฟล์ jquery สำรอง
