<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutEvaluations request structure.
 *
 * @method string getResultToken() Obtain Callback token. Obtained from the ResultToken value in the Context of the selected Serverless Cloud Function (SCF) for the custom rule.
 * @method void setResultToken(string $ResultToken) Set Callback token. Obtained from the ResultToken value in the Context of the selected Serverless Cloud Function (SCF) for the custom rule.
 * @method array getEvaluations() Obtain Custom rule evaluation result information.
 * @method void setEvaluations(array $Evaluations) Set Custom rule evaluation result information.
 */
class PutEvaluationsRequest extends AbstractModel
{
    /**
     * @var string Callback token. Obtained from the ResultToken value in the Context of the selected Serverless Cloud Function (SCF) for the custom rule.
     */
    public $ResultToken;

    /**
     * @var array Custom rule evaluation result information.
     */
    public $Evaluations;

    /**
     * @param string $ResultToken Callback token. Obtained from the ResultToken value in the Context of the selected Serverless Cloud Function (SCF) for the custom rule.
     * @param array $Evaluations Custom rule evaluation result information.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ResultToken",$param) and $param["ResultToken"] !== null) {
            $this->ResultToken = $param["ResultToken"];
        }

        if (array_key_exists("Evaluations",$param) and $param["Evaluations"] !== null) {
            $this->Evaluations = [];
            foreach ($param["Evaluations"] as $key => $value){
                $obj = new Evaluation();
                $obj->deserialize($value);
                array_push($this->Evaluations, $obj);
            }
        }
    }
}
