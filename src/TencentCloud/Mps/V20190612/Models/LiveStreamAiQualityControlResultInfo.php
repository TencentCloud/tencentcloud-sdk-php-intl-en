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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Live stream media quality inspection result.
 *
 * @method array getQualityControlResults() Obtain Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityControlResults(array $QualityControlResults) Set Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDiagnoseResults() Obtain 
 * @method void setDiagnoseResults(array $DiagnoseResults) Set 
 * @method array getQualityControlResultSet() Obtain Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityControlResultSet(array $QualityControlResultSet) Set Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDiagnoseResultSet() Obtain Format diagnostic result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiagnoseResultSet(array $DiagnoseResultSet) Set Format diagnostic result list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveStreamAiQualityControlResultInfo extends AbstractModel
{
    /**
     * @var array Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $QualityControlResults;

    /**
     * @var array 
     * @deprecated
     */
    public $DiagnoseResults;

    /**
     * @var array Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityControlResultSet;

    /**
     * @var array Format diagnostic result list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiagnoseResultSet;

    /**
     * @param array $QualityControlResults Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DiagnoseResults 
     * @param array $QualityControlResultSet Content quality inspection result list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DiagnoseResultSet Format diagnostic result list.
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
        if (array_key_exists("QualityControlResults",$param) and $param["QualityControlResults"] !== null) {
            $this->QualityControlResults = [];
            foreach ($param["QualityControlResults"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResults, $obj);
            }
        }

        if (array_key_exists("DiagnoseResults",$param) and $param["DiagnoseResults"] !== null) {
            $this->DiagnoseResults = [];
            foreach ($param["DiagnoseResults"] as $key => $value){
                $obj = new DiagnoseResult();
                $obj->deserialize($value);
                array_push($this->DiagnoseResults, $obj);
            }
        }

        if (array_key_exists("QualityControlResultSet",$param) and $param["QualityControlResultSet"] !== null) {
            $this->QualityControlResultSet = [];
            foreach ($param["QualityControlResultSet"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResultSet, $obj);
            }
        }

        if (array_key_exists("DiagnoseResultSet",$param) and $param["DiagnoseResultSet"] !== null) {
            $this->DiagnoseResultSet = [];
            foreach ($param["DiagnoseResultSet"] as $key => $value){
                $obj = new DiagnoseResult();
                $obj->deserialize($value);
                array_push($this->DiagnoseResultSet, $obj);
            }
        }
    }
}
