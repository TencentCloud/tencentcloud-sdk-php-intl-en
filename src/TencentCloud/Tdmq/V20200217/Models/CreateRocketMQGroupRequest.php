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
 * CreateRocketMQGroup request structure.
 *
 * @method string getGroupId() Obtain Group name (8–64 characters)
 * @method void setGroupId(string $GroupId) Set Group name (8–64 characters)
 * @method array getNamespaces() Obtain Namespace. Currently, only one namespace is supported
 * @method void setNamespaces(array $Namespaces) Set Namespace. Currently, only one namespace is supported
 * @method boolean getReadEnable() Obtain Whether to enable consumption
 * @method void setReadEnable(boolean $ReadEnable) Set Whether to enable consumption
 * @method boolean getBroadcastEnable() Obtain Whether to enable broadcast consumption
 * @method void setBroadcastEnable(boolean $BroadcastEnable) Set Whether to enable broadcast consumption
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getRemark() Obtain Remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
 * @method string getGroupType() Obtain Group type (`TCP`, `HTTP`)
 * @method void setGroupType(string $GroupType) Set Group type (`TCP`, `HTTP`)
 * @method integer getRetryMaxTimes() Obtain The maximum number of retries for a group
 * @method void setRetryMaxTimes(integer $RetryMaxTimes) Set The maximum number of retries for a group
 */
class CreateRocketMQGroupRequest extends AbstractModel
{
    /**
     * @var string Group name (8–64 characters)
     */
    public $GroupId;

    /**
     * @var array Namespace. Currently, only one namespace is supported
     */
    public $Namespaces;

    /**
     * @var boolean Whether to enable consumption
     */
    public $ReadEnable;

    /**
     * @var boolean Whether to enable broadcast consumption
     */
    public $BroadcastEnable;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @var string Group type (`TCP`, `HTTP`)
     */
    public $GroupType;

    /**
     * @var integer The maximum number of retries for a group
     */
    public $RetryMaxTimes;

    /**
     * @param string $GroupId Group name (8–64 characters)
     * @param array $Namespaces Namespace. Currently, only one namespace is supported
     * @param boolean $ReadEnable Whether to enable consumption
     * @param boolean $BroadcastEnable Whether to enable broadcast consumption
     * @param string $ClusterId Cluster ID
     * @param string $Remark Remarks (up to 128 characters)
     * @param string $GroupType Group type (`TCP`, `HTTP`)
     * @param integer $RetryMaxTimes The maximum number of retries for a group
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("ReadEnable",$param) and $param["ReadEnable"] !== null) {
            $this->ReadEnable = $param["ReadEnable"];
        }

        if (array_key_exists("BroadcastEnable",$param) and $param["BroadcastEnable"] !== null) {
            $this->BroadcastEnable = $param["BroadcastEnable"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("RetryMaxTimes",$param) and $param["RetryMaxTimes"] !== null) {
            $this->RetryMaxTimes = $param["RetryMaxTimes"];
        }
    }
}
