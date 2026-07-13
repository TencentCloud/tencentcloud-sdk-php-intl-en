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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQServerlessInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method boolean getTraceFlag() Obtain Whether trace is enabled.
 * @method void setTraceFlag(boolean $TraceFlag) Set Whether trace is enabled.
 * @method float getSendReceiveRatio() Obtain Traffic throttling production consumption ratio
 * @method void setSendReceiveRatio(float $SendReceiveRatio) Set Traffic throttling production consumption ratio
 * @method boolean getDeleteAllTags() Obtain Specifies whether to delete all tags. Default value: false.
 * @method void setDeleteAllTags(boolean $DeleteAllTags) Set Specifies whether to delete all tags. Default value: false.
 * @method array getInstanceTags() Obtain Modified instance tag list
 * @method void setInstanceTags(array $InstanceTags) Set Modified instance tag list
 */
class ModifyRabbitMQServerlessInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var boolean Whether trace is enabled.
     */
    public $TraceFlag;

    /**
     * @var float Traffic throttling production consumption ratio
     */
    public $SendReceiveRatio;

    /**
     * @var boolean Specifies whether to delete all tags. Default value: false.
     */
    public $DeleteAllTags;

    /**
     * @var array Modified instance tag list
     */
    public $InstanceTags;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ClusterName Cluster name.
     * @param string $Remark Remarks
     * @param boolean $TraceFlag Whether trace is enabled.
     * @param float $SendReceiveRatio Traffic throttling production consumption ratio
     * @param boolean $DeleteAllTags Specifies whether to delete all tags. Default value: false.
     * @param array $InstanceTags Modified instance tag list
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TraceFlag",$param) and $param["TraceFlag"] !== null) {
            $this->TraceFlag = $param["TraceFlag"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("DeleteAllTags",$param) and $param["DeleteAllTags"] !== null) {
            $this->DeleteAllTags = $param["DeleteAllTags"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new RabbitMQServerlessTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }
    }
}
