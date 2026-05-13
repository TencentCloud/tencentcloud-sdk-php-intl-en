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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQGroupV2 request structure.
 *
 * @method string getGroupId() Obtain consumer group name
 * @method void setGroupId(string $GroupId) Set consumer group name
 * @method string getNamespace() Obtain Namespace of the consumption group. The 4.x common Cluster Namespace is fixed as: tdmq_default
 * @method void setNamespace(string $Namespace) Set Namespace of the consumption group. The 4.x common Cluster Namespace is fixed as: tdmq_default
 * @method boolean getReadEnable() Obtain Enable consumption
 * @method void setReadEnable(boolean $ReadEnable) Set Enable consumption
 * @method boolean getBroadcastEnable() Obtain Enable broadcast consumption
 * @method void setBroadcastEnable(boolean $BroadcastEnable) Set Enable broadcast consumption
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getGroupType() Obtain Group Type (TCP/HTTP)
 * @method void setGroupType(string $GroupType) Set Group Type (TCP/HTTP)
 * @method integer getRetryMaxTimes() Obtain Group Max Retry Count
 * @method void setRetryMaxTimes(integer $RetryMaxTimes) Set Group Max Retry Count
 * @method array getTagList() Obtain Tag list
 * @method void setTagList(array $TagList) Set Tag list
 */
class CreateRocketMQGroupV2Request extends AbstractModel
{
    /**
     * @var string consumer group name
     */
    public $GroupId;

    /**
     * @var string Namespace of the consumption group. The 4.x common Cluster Namespace is fixed as: tdmq_default
     */
    public $Namespace;

    /**
     * @var boolean Enable consumption
     */
    public $ReadEnable;

    /**
     * @var boolean Enable broadcast consumption
     */
    public $BroadcastEnable;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Group Type (TCP/HTTP)
     */
    public $GroupType;

    /**
     * @var integer Group Max Retry Count
     */
    public $RetryMaxTimes;

    /**
     * @var array Tag list
     */
    public $TagList;

    /**
     * @param string $GroupId consumer group name
     * @param string $Namespace Namespace of the consumption group. The 4.x common Cluster Namespace is fixed as: tdmq_default
     * @param boolean $ReadEnable Enable consumption
     * @param boolean $BroadcastEnable Enable broadcast consumption
     * @param string $ClusterId Cluster ID
     * @param string $Remark Remarks
     * @param string $GroupType Group Type (TCP/HTTP)
     * @param integer $RetryMaxTimes Group Max Retry Count
     * @param array $TagList Tag list
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
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

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
