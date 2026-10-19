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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAggregateConfigDeliver request structure.
 *
 * @method integer getStatus() Obtain Valid values: 0 (disabled) and 1 (enabled).
 * @method void setStatus(integer $Status) Set Valid values: 0 (disabled) and 1 (enabled).
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getDeliverName() Obtain Delivery service name
 * @method void setDeliverName(string $DeliverName) Set Delivery service name
 * @method string getTargetArn() Obtain Six-segment resource format  
COS:qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
 * @method void setTargetArn(string $TargetArn) Set Six-segment resource format  
COS:qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
 * @method string getDeliverPrefix() Obtain Resource prefix.
 * @method void setDeliverPrefix(string $DeliverPrefix) Set Resource prefix.
 * @method string getDeliverType() Obtain Delivery type. Valid value: COS and CLS.
 * @method void setDeliverType(string $DeliverType) Set Delivery type. Valid value: COS and CLS.
 * @method integer getDeliverUin() Obtain Member account UIN supporting cross-account delivery, which can only be the delegated administrator. The default value is 0, indicating delivery to the administrator account.
 * @method void setDeliverUin(integer $DeliverUin) Set Member account UIN supporting cross-account delivery, which can only be the delegated administrator. The default value is 0, indicating delivery to the administrator account.
 * @method integer getDeliverContentType() Obtain Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
 * @method void setDeliverContentType(integer $DeliverContentType) Set Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
 */
class UpdateAggregateConfigDeliverRequest extends AbstractModel
{
    /**
     * @var integer Valid values: 0 (disabled) and 1 (enabled).
     */
    public $Status;

    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Delivery service name
     */
    public $DeliverName;

    /**
     * @var string Six-segment resource format  
COS:qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
     */
    public $TargetArn;

    /**
     * @var string Resource prefix.
     */
    public $DeliverPrefix;

    /**
     * @var string Delivery type. Valid value: COS and CLS.
     */
    public $DeliverType;

    /**
     * @var integer Member account UIN supporting cross-account delivery, which can only be the delegated administrator. The default value is 0, indicating delivery to the administrator account.
     */
    public $DeliverUin;

    /**
     * @var integer Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
     */
    public $DeliverContentType;

    /**
     * @param integer $Status Valid values: 0 (disabled) and 1 (enabled).
     * @param string $AccountGroupId Account group ID.
     * @param string $DeliverName Delivery service name
     * @param string $TargetArn Six-segment resource format  
COS:qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
     * @param string $DeliverPrefix Resource prefix.
     * @param string $DeliverType Delivery type. Valid value: COS and CLS.
     * @param integer $DeliverUin Member account UIN supporting cross-account delivery, which can only be the delegated administrator. The default value is 0, indicating delivery to the administrator account.
     * @param integer $DeliverContentType Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("DeliverName",$param) and $param["DeliverName"] !== null) {
            $this->DeliverName = $param["DeliverName"];
        }

        if (array_key_exists("TargetArn",$param) and $param["TargetArn"] !== null) {
            $this->TargetArn = $param["TargetArn"];
        }

        if (array_key_exists("DeliverPrefix",$param) and $param["DeliverPrefix"] !== null) {
            $this->DeliverPrefix = $param["DeliverPrefix"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverUin",$param) and $param["DeliverUin"] !== null) {
            $this->DeliverUin = $param["DeliverUin"];
        }

        if (array_key_exists("DeliverContentType",$param) and $param["DeliverContentType"] !== null) {
            $this->DeliverContentType = $param["DeliverContentType"];
        }
    }
}
