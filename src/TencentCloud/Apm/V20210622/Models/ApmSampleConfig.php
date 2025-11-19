<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sampling configuration
 *
 * @method string getInstanceKey() Obtain Instance ID.
 * @method void setInstanceKey(string $InstanceKey) Set Instance ID.
 * @method string getServiceName() Obtain Service name.
 * @method void setServiceName(string $ServiceName) Set Service name.
 * @method string getSampleName() Obtain Sampling name
 * @method void setSampleName(string $SampleName) Set Sampling name
 * @method string getOperationName() Obtain API name.
 * @method void setOperationName(string $OperationName) Set API name.
 * @method integer getSpanNum() Obtain Number of spans sampled
 * @method void setSpanNum(integer $SpanNum) Set Number of spans sampled
 * @method integer getStatus() Obtain Sampling configuration switch. 0: Off; 1: On
 * @method void setStatus(integer $Status) Set Sampling configuration switch. 0: Off; 1: On
 * @method array getTags() Obtain Tag array
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag array
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSampleRate() Obtain Sampling rate.
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate.
 * @method integer getOperationType() Obtain Specifies the matching method. 0: exact match (default); 1: prefix match; 2: suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperationType(integer $OperationType) Set Specifies the matching method. 0: exact match (default); 1: prefix match; 2: suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApmSampleConfig extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceKey;

    /**
     * @var string Service name.
     */
    public $ServiceName;

    /**
     * @var string Sampling name
     */
    public $SampleName;

    /**
     * @var string API name.
     */
    public $OperationName;

    /**
     * @var integer Number of spans sampled
     */
    public $SpanNum;

    /**
     * @var integer Sampling configuration switch. 0: Off; 1: On
     */
    public $Status;

    /**
     * @var array Tag array
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Sampling rate.
     */
    public $SampleRate;

    /**
     * @var integer Specifies the matching method. 0: exact match (default); 1: prefix match; 2: suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperationType;

    /**
     * @var integer Configuration ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @param string $InstanceKey Instance ID.
     * @param string $ServiceName Service name.
     * @param string $SampleName Sampling name
     * @param string $OperationName API name.
     * @param integer $SpanNum Number of spans sampled
     * @param integer $Status Sampling configuration switch. 0: Off; 1: On
     * @param array $Tags Tag array
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SampleRate Sampling rate.
     * @param integer $OperationType Specifies the matching method. 0: exact match (default); 1: prefix match; 2: suffix match.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Configuration ID.
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("SampleName",$param) and $param["SampleName"] !== null) {
            $this->SampleName = $param["SampleName"];
        }

        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("SpanNum",$param) and $param["SpanNum"] !== null) {
            $this->SpanNum = $param["SpanNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
