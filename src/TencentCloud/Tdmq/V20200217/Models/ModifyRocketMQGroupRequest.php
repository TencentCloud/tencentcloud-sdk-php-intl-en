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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQGroup request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace
 * @method void setNamespaceId(string $NamespaceId) Set Namespace
 * @method string getGroupId() Obtain Consumer group name
 * @method void setGroupId(string $GroupId) Set Consumer group name
 * @method string getRemark() Obtain Remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
 * @method boolean getReadEnable() Obtain Whether to enable consumption
 * @method void setReadEnable(boolean $ReadEnable) Set Whether to enable consumption
 * @method boolean getBroadcastEnable() Obtain Whether to enable broadcast consumption
 * @method void setBroadcastEnable(boolean $BroadcastEnable) Set Whether to enable broadcast consumption
 * @method integer getRetryMaxTimes() Obtain The maximum number of retries
 * @method void setRetryMaxTimes(integer $RetryMaxTimes) Set The maximum number of retries
 */
class ModifyRocketMQGroupRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace
     */
    public $NamespaceId;

    /**
     * @var string Consumer group name
     */
    public $GroupId;

    /**
     * @var string Remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @var boolean Whether to enable consumption
     */
    public $ReadEnable;

    /**
     * @var boolean Whether to enable broadcast consumption
     */
    public $BroadcastEnable;

    /**
     * @var integer The maximum number of retries
     */
    public $RetryMaxTimes;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace
     * @param string $GroupId Consumer group name
     * @param string $Remark Remarks (up to 128 characters)
     * @param boolean $ReadEnable Whether to enable consumption
     * @param boolean $BroadcastEnable Whether to enable broadcast consumption
     * @param integer $RetryMaxTimes The maximum number of retries
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReadEnable",$param) and $param["ReadEnable"] !== null) {
            $this->ReadEnable = $param["ReadEnable"];
        }

        if (array_key_exists("BroadcastEnable",$param) and $param["BroadcastEnable"] !== null) {
            $this->BroadcastEnable = $param["BroadcastEnable"];
        }

        if (array_key_exists("RetryMaxTimes",$param) and $param["RetryMaxTimes"] !== null) {
            $this->RetryMaxTimes = $param["RetryMaxTimes"];
        }
    }
}
