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
 * Engine specification details
 *
 * @method string getDataEngineId() Obtain Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataEngineName() Obtain Engine name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineName(string $DataEngineName) Set Engine name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getScaleDetail() Obtain Engine specification details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScaleDetail(array $ScaleDetail) Set Engine specification details
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataEngineScaleInfo extends AbstractModel
{
    /**
     * @var string Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineId;

    /**
     * @var string Engine name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineName;

    /**
     * @var array Engine specification details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScaleDetail;

    /**
     * @param string $DataEngineId Engine ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataEngineName Engine name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ScaleDetail Engine specification details
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ScaleDetail",$param) and $param["ScaleDetail"] !== null) {
            $this->ScaleDetail = [];
            foreach ($param["ScaleDetail"] as $key => $value){
                $obj = new DataEngineScaleInfoDetail();
                $obj->deserialize($value);
                array_push($this->ScaleDetail, $obj);
            }
        }
    }
}
