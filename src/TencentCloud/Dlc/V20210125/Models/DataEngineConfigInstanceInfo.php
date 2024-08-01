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
 * Engine configuration information
 *
 * @method string getDataEngineId() Obtain Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDataEngineConfigPairs() Obtain Collection of user-defined configuration items
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) Set Collection of user-defined configuration items
 * @method SessionResourceTemplate getSessionResourceTemplate() Obtain Template of the resource parameter configuration of the job cluster
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) Set Template of the resource parameter configuration of the job cluster
 */
class DataEngineConfigInstanceInfo extends AbstractModel
{
    /**
     * @var string Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineId;

    /**
     * @var array Collection of user-defined configuration items
     */
    public $DataEngineConfigPairs;

    /**
     * @var SessionResourceTemplate Template of the resource parameter configuration of the job cluster
     */
    public $SessionResourceTemplate;

    /**
     * @param string $DataEngineId Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DataEngineConfigPairs Collection of user-defined configuration items
     * @param SessionResourceTemplate $SessionResourceTemplate Template of the resource parameter configuration of the job cluster
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
