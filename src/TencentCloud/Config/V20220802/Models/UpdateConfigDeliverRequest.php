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
 * UpdateConfigDeliver request structure.
 *
 * @method integer getStatus() Obtain Valid values: 0 (disabled) and 1 (enabled).
 * @method void setStatus(integer $Status) Set Valid values: 0 (disabled) and 1 (enabled).
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
 * @method string getDeliverPrefix() Obtain clonfig_fix
 * @method void setDeliverPrefix(string $DeliverPrefix) Set clonfig_fix
 * @method string getDeliverType() Obtain Delivery Type
 * @method void setDeliverType(string $DeliverType) Set Delivery Type
 * @method integer getDeliverContentType() Obtain Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
 * @method void setDeliverContentType(integer $DeliverContentType) Set Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
 */
class UpdateConfigDeliverRequest extends AbstractModel
{
    /**
     * @var integer Valid values: 0 (disabled) and 1 (enabled).
     */
    public $Status;

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
     * @var string clonfig_fix
     */
    public $DeliverPrefix;

    /**
     * @var string Delivery Type
     */
    public $DeliverType;

    /**
     * @var integer Valid values: 1 (configuration changes), 2 (resource list), and 3 (all).
     */
    public $DeliverContentType;

    /**
     * @param integer $Status Valid values: 0 (disabled) and 1 (enabled).
     * @param string $DeliverName Delivery service name
     * @param string $TargetArn Six-segment resource format  
COS:qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
     * @param string $DeliverPrefix clonfig_fix
     * @param string $DeliverType Delivery Type
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

        if (array_key_exists("DeliverContentType",$param) and $param["DeliverContentType"] !== null) {
            $this->DeliverContentType = $param["DeliverContentType"];
        }
    }
}
