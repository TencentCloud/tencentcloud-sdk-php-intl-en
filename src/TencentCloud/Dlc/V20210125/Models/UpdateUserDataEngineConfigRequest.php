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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserDataEngineConfig request structure.
 *
 * @method string getDataEngineId() Obtain Engine ID
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
 * @method array getDataEngineConfigPairs() Obtain Collection of user-defined engine configuration items. This parameter needs to input all the configuration items users should add. For example, if there is a configuration item named k1:v1 while k2:v2 needs to be added, [k1:v1,k2:v2] should be passed.
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) Set Collection of user-defined engine configuration items. This parameter needs to input all the configuration items users should add. For example, if there is a configuration item named k1:v1 while k2:v2 needs to be added, [k1:v1,k2:v2] should be passed.
 * @method SessionResourceTemplate getSessionResourceTemplate() Obtain Template of the resource configuration of the job engine
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) Set Template of the resource configuration of the job engine
 */
class UpdateUserDataEngineConfigRequest extends AbstractModel
{
    /**
     * @var string Engine ID
     */
    public $DataEngineId;

    /**
     * @var array Collection of user-defined engine configuration items. This parameter needs to input all the configuration items users should add. For example, if there is a configuration item named k1:v1 while k2:v2 needs to be added, [k1:v1,k2:v2] should be passed.
     */
    public $DataEngineConfigPairs;

    /**
     * @var SessionResourceTemplate Template of the resource configuration of the job engine
     */
    public $SessionResourceTemplate;

    /**
     * @param string $DataEngineId Engine ID
     * @param array $DataEngineConfigPairs Collection of user-defined engine configuration items. This parameter needs to input all the configuration items users should add. For example, if there is a configuration item named k1:v1 while k2:v2 needs to be added, [k1:v1,k2:v2] should be passed.
     * @param SessionResourceTemplate $SessionResourceTemplate Template of the resource configuration of the job engine
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("DataEngineConfigPairs",$param) and $param["DataEngineConfigPairs"] !== null) {
            $this->DataEngineConfigPairs = [];
            foreach ($param["DataEngineConfigPairs"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->DataEngineConfigPairs, $obj);
            }
        }

        if (array_key_exists("SessionResourceTemplate",$param) and $param["SessionResourceTemplate"] !== null) {
            $this->SessionResourceTemplate = new SessionResourceTemplate();
            $this->SessionResourceTemplate->deserialize($param["SessionResourceTemplate"]);
        }
    }
}
