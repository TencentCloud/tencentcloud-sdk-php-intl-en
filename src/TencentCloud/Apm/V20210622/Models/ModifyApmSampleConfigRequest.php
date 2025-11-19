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
 * ModifyApmSampleConfig request structure.
 *
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method string getSampleName() Obtain Sampling rule name.
 * @method void setSampleName(string $SampleName) Set Sampling rule name.
 * @method integer getSampleRate() Obtain Sampling rate.
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate.
 * @method string getServiceName() Obtain Application name. specifies the application name. fill in the blank to take effect on all applications.
 * @method void setServiceName(string $ServiceName) Set Application name. specifies the application name. fill in the blank to take effect on all applications.
 * @method string getOperationName() Obtain API name.
 * @method void setOperationName(string $OperationName) Set API name.
 * @method array getTags() Obtain Sampling tag
 * @method void setTags(array $Tags) Set Sampling tag
 * @method integer getStatus() Obtain Sampling switch. 0: Off; 1: On; 2: Delete
 * @method void setStatus(integer $Status) Set Sampling switch. 0: Off; 1: On; 2: Delete
 * @method integer getId() Obtain Configuration ID.
 * @method void setId(integer $Id) Set Configuration ID.
 * @method integer getOperationType() Obtain 0: exact match (default); 1: prefix match; 2: suffix match.
 * @method void setOperationType(integer $OperationType) Set 0: exact match (default); 1: prefix match; 2: suffix match.
 */
class ModifyApmSampleConfigRequest extends AbstractModel
{
    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var string Sampling rule name.
     */
    public $SampleName;

    /**
     * @var integer Sampling rate.
     */
    public $SampleRate;

    /**
     * @var string Application name. specifies the application name. fill in the blank to take effect on all applications.
     */
    public $ServiceName;

    /**
     * @var string API name.
     */
    public $OperationName;

    /**
     * @var array Sampling tag
     */
    public $Tags;

    /**
     * @var integer Sampling switch. 0: Off; 1: On; 2: Delete
     */
    public $Status;

    /**
     * @var integer Configuration ID.
     */
    public $Id;

    /**
     * @var integer 0: exact match (default); 1: prefix match; 2: suffix match.
     */
    public $OperationType;

    /**
     * @param string $InstanceId Business system ID
     * @param string $SampleName Sampling rule name.
     * @param integer $SampleRate Sampling rate.
     * @param string $ServiceName Application name. specifies the application name. fill in the blank to take effect on all applications.
     * @param string $OperationName API name.
     * @param array $Tags Sampling tag
     * @param integer $Status Sampling switch. 0: Off; 1: On; 2: Delete
     * @param integer $Id Configuration ID.
     * @param integer $OperationType 0: exact match (default); 1: prefix match; 2: suffix match.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SampleName",$param) and $param["SampleName"] !== null) {
            $this->SampleName = $param["SampleName"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
