function displayTip(obj,txt){
		var tip= document.getElementById("tip");
		tip.style.display='block';
		tip.style.top=(iOffsetTop(obj)+obj.offsetHeight)+"px";
		tip.style.left=iOffsetLeft(obj)+"px";
		tip.innerHTML=txt;
	}
	function hideTip(){
		var tip= document.getElementById("tip");
		tip.style.display="none";
		tip.innerHTML="";

	}
	
	function iOffsetTop(obj){
		var offset = 0;
		do {
			offset += obj.offsetTop;
			obj=obj.offsetParent;
		} while(obj!=null && obj.tagName!="body");
		return offset;
	}
	
	function iOffsetLeft(obj){
		var offset = 0;
		do {
			offset += obj.offsetLeft;
			obj=obj.offsetParent;
		} while(obj!=null && obj.tagName!="body");
		return offset;
	}
	
    var ajax = new sack();
    var currentClientID=false;
    function getClientData()
    {
        var clientId = document.getElementById('nome').value.replace(/[^0-9]/g,'');
        if(clientId.length>=1 && clientId!=currentClientID){
            currentClientID = clientId
            ajax.requestFile = 'php/getClient.php?getClientId='+clientId;   // especifica o arquivo para pegar o get
            ajax.onCompletion = showClientData; // Especifiqua a função que será executada após arquivo encontrado
            ajax.runAJAX();     // executa a função ajax  
        }

    }

    function showClientData()
    {
        var formObj = document.forms['clientForm']; 
        eval(ajax.response);
    }


    function initFormEvents()
    {
        document.getElementById('nome').onblur = getClientData;
        document.getElementById('nome').focus();
		document.getElementById('clienteNome').onkeyup = nomeQuery;
		//document.getElementById('nomecompleto').onblur = hideTip;
    }

	function makeItem(nome,id){
		return '<div onclick="fillWithId('+id+')" class="item">'+nome+'</div>';
	}
	
	function fillWithId(id){
		document.getElementById('nome').value=id;
		getClientData();
		hideTip();
        document.clientForm.processoJsituacao.disabled = false;
		document.clientForm.processoJadvogado.disabled = false;
        document.clientForm.processoNumero.disabled = false;
        document.clientForm.processoJclasse.disabled = false;
        document.clientForm.processoJarea.disabled = false;
        document.clientForm.processoJassunto.disabled = false;
        document.clientForm.processoJdistribuicao.disabled = false;
        document.clientForm.processoJdependencia.disabled = false;
        document.clientForm.processoJcomarca.disabled = false;
        document.clientForm.processoJcompetencia.disabled = false;
        document.clientForm.processoJvara.disabled = false;
        document.clientForm.processoJinstancia.disabled = false;
        document.clientForm.processoJvalorvcao.disabled = false;
        document.clientForm.processoJrequerente.disabled = false;
        document.clientForm.processoJrequerido.disabled = false;
        document.clientForm.processoJlinklrocesso.disabled = false;
	}
	
	
	function nomeQuery()
    {
        var q = document.getElementById('clienteNome').value;
        if(q.length>=1){
            ajax.requestFile = 'php/nomequery.php?query='+q;   // especifica o arquivo para pegar o get
            ajax.onCompletion = showTips; // Especifiqua a função que será executada após arquivo encontrado
            ajax.runAJAX();     // executa a função ajax  
			
        } else {
			hideTip();
		
		}

		
		
    }
	
	function showTips(){
		var list = "";
		var users = eval(ajax.response.split(",]").join("]"));
		for (var i = 0 ; i < users.length ; i++){
			list+=makeItem(users[i].nome,users[i].id);
		}
	
	displayTip(document.getElementById("clienteNome"),list);
	
	}
	
	
	
    window.onload = initFormEvents;