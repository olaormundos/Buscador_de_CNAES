<?php
session_start();
//var_dump($_SESSION);
$principal = $_SESSION;
//var_dump($principal);
class CN_API{
    private $key     = null;
    private $error   = false;

    function __construct ( $key = null ) {
        
        if(!empty($key)) $this->key = $key;
    }

    function request( $endpoint = '', $params = array()){
        //$uri = "https://servicodados.ibge.gov.br/" . $endpoint .  $this->$key;
        $uri = "https://servicodados.ibge.gov.br/" . $endpoint .  "01113";

        if( is_array($params) ){
            
            foreach ($params as $key => $value){
                if (empty($value)) continue;
                $uri .= $key . '=' . urlencode ($value) . '&';
            }
            $uri           = substr($uri, 0, -1);
            $response      = @file_get_contents($uri);
            $this->error   = false;
            return json_decode($response, true);

        } else{

            $this->error   = true;
            return false;

        }
    }
    function is_error (){
        return $this->error;
    }
    function cn_busca(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            //echo($response);
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl
            curl_close($curl);   

        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //return $decodedData;
            //return $decodedData[0]['descricao'];
            if ( ! isset($decodedData[0]['descricao'])):
                return $decodedData['descricao'];
            else:

              return $decodedData[0]['descricao'];
            endif; 
            
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_id(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl
            curl_close($curl);

        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //return $decodedData[0]['id'];
            if ( ! isset($decodedData[0]['id'])):
                return $decodedData['id'];
            else:

              return $decodedData[0]['id'];
            endif; 
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_atv(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][1]);
            // Closing curl
            curl_close($curl);

        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            /*foreach ($decodedData as $old) {
                //return $old['classe']['observacoes'][0];
                
            }*/
            if ( ! isset($decodedData['classe']['observacoes'][0])):
                //return $decodedData['classe']['id'][0];
                //return $decodedData['classe']['observacoes'];
                //return $decodedData['classe']['observacoes'][0];
                foreach ($decodedData as $old) {
                    return $old['classe']['observacoes'][0];
                    
                }
            else:
                
                    return $decodedData['classe']['observacoes'][0];
                    
                
              
            endif; 
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_atv_list(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl
            curl_close($curl);
            global $atividadescnaes;
            $atividadescnaes = array_column($decodedData, 'atividades');
            
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;

                foreach ($atividadescnaes as $color) {
                    global $string;
                    global $color;
                    
                }    
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_api_agil_mei(){

        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://stage.admin.contaagil.com.br/api/BuscaCnaes?codigo=' .$cod,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Token: 5e750a8b34ae998d681de20008f3bf65'
        ),
        ));

        $response = curl_exec($curl);
        // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $response = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl

        curl_close($curl);

        if(!empty($response) && is_array( $response)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($response as $malt) {
                return $malt['Mei'];
            }
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_api_agil_anexo1(){

        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://stage.admin.contaagil.com.br/api/BuscaCnaes?codigo=' .$cod,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Token: 5e750a8b34ae998d681de20008f3bf65'
        ),
        ));

        $response = curl_exec($curl);
        //echo($response);
        // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $response = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl

        curl_close($curl);

        if(!empty($response) && is_array( $response)){
            $this->error = false;
            //var_dump($response);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($response as $malt) {
                //Validação de erro se o Array vier vazio.
                if($malt['Anexos'] == null)
                return 'Serviço indisponível.';
                else
                return $malt['Anexos'][0]['Anexo'];
            }
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_api_agil_anexo2(){

        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://stage.admin.contaagil.com.br/api/BuscaCnaes?codigo=' .$cod,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Token: 5e750a8b34ae998d681de20008f3bf65'
        ),
        ));

        $response = curl_exec($curl);
        //echo($response);
        // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $response = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }

            // Closing curl

        curl_close($curl);
        
        if(!empty($response) && is_array( $response)){
            $this->error = false;
            //var_dump($decodedData);
            //var_dump($response);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($response as $malt) {
                if ( ! isset($malt['Anexos'][1])):
                    $malt['Anexos'][1] = null;
                    return 'Falta';
                else:

                  return $malt['Anexos'][1]['Anexo'];
                endif;  
            }
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_api_agil_atende(){

        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://stage.admin.contaagil.com.br/api/BuscaCnaes?codigo=' .$cod,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Token: 5e750a8b34ae998d681de20008f3bf65'
        ),
        ));

        $response = curl_exec($curl);
        // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $response = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl

        curl_close($curl);

        if(!empty($response) && is_array( $response)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($response as $malt) {
                return $malt['Atende'];
            }
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_api_agil_simples(){

        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://stage.admin.contaagil.com.br/api/BuscaCnaes?codigo=' .$cod,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Token: 5e750a8b34ae998d681de20008f3bf65'
        ),
        ));

        $response = curl_exec($curl);
        // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $response = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl

        curl_close($curl);

        if(!empty($response) && is_array( $response)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($response as $malt) {
                return $malt['SimplesNacional'];
            }
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_api_agil_fator_r(){

        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://stage.admin.contaagil.com.br/api/BuscaCnaes?codigo=' .$cod,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Token: 5e750a8b34ae998d681de20008f3bf65'
        ),
        ));

        $response = curl_exec($curl);
        //var_dump($response);
        // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $response = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            
            // Closing curl

        curl_close($curl);

        if(!empty($response) && is_array( $response)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($response as $malt) {
                //Validação de erro se o Array vier vazio.
                if($malt['FatorR'] == null)
                return 'Serviço indisponível.';
                else
                return $malt['FatorR'];
            }
        }else{
            $this->error = true;
            return false;
        }
    }
    function cn_busca_npe(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][2]);
            // Closing curl
            curl_close($curl);
            //var_dump($decodedData);
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            /*foreach ($decodedData as $old) {
                //return $old['classe']['observacoes'][0];
                
            }*/
            /*$valor1 = array($decodedData[0]['observacoes']);*/
            $valor2 = array($decodedData[0]['observacoes'][2]);
            //var_dump($decodedData);
            //var_dump($valor2);

            if ( in_array ("Esta classe NÃO compreende" || "Esta subclasse NÃO compreende", $valor2)){
                return $decodedData[0]['observacoes'][2];
            }
            else{
                return $decodedData[0]['observacoes'][1];
            }
            /*if ( in_array('Esta subclasse NÃO compreende', $valor1)){        
                return $decodedData[0]['observacoes'][2];
            }    
            else{
                
                if ( in_array('Esta subclasse NÃO compreende', $valor1) != $decodedData[0]['observacoes'][1]){
                return $decodedData[0]['observacoes'][1];
                }
                else{
                    if ($decodedData[0]['observacoes'][2] === null){
                        return $decodedData[0]['observacoes'][2];
                        }
                }
            }*/
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_classe(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][2]);
            // Closing curl
            curl_close($curl);
            //var_dump($decodedData);
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($decodedData as $old) {
                return $old['classe']['descricao'];
                
            }
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_grupo(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][2]);
            // Closing curl
            curl_close($curl);
            //var_dump($decodedData);
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($decodedData as $old) {
                return $old['classe']['grupo']['descricao'];
                
            }
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_divisao_id(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][2]);
            // Closing curl
            curl_close($curl);
            //var_dump($decodedData);
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($decodedData as $old) {
                return $old['classe']['grupo']['divisao']['id'];
                
            }
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_divisao(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][2]);
            // Closing curl
            curl_close($curl);
            //var_dump($decodedData);
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($decodedData as $old) {
                return $old['classe']['grupo']['divisao']['descricao'];
                
            }
        }else{
            $this->error = true;
            return false;
        }
        
    }
    function cn_busca_secao_desc(){
        //session_start();
        //var_dump($_SESSION);
        $principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        foreach ($principal as $value) {
            //echo "$value";
            $cod  = $value;
        }
          //echo "$cod";
            $curl = curl_init();
                
            // Sending GET request to reqres.in
            // server to get JSON data
            curl_setopt($curl, CURLOPT_URL, 
            'https://servicodados.ibge.gov.br/api/v2/cnae/subclasses/' . $cod);
                
            // Telling curl to store JSON
            // data in a variable instead
            // of dumping on screen
            curl_setopt($curl, 
                CURLOPT_RETURNTRANSFER, true);
                
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs 
            // during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                
                // Decoding JSON data
                $decodedData = 
                    json_decode($response, true); 
                    
                // Outputing JSON data in
                // Decoded form
                
            }
            //var_dump($decodedData[1]['observacoes'][2]);
            // Closing curl
            curl_close($curl);
            //var_dump($decodedData);
        if(!empty($decodedData) && is_array( $decodedData)){
            $this->error = false;
            //var_dump($decodedData);
            //return $decodedData[0]['classe']['observacoes'][0];

            foreach ($decodedData as $old) {
                return $old['classe']['grupo']['divisao']['secao']['descricao'];
                
            }
        }else{
            $this->error = true;
            return false;
        }
        
    }
}

?>