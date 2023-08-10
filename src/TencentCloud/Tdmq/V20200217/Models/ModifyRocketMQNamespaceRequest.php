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
 * ModifyRocketMQNamespace request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method void setNamespaceId(string $NamespaceId) Set Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method integer getTtl() Obtain This parameter is disused.
 * @method void setTtl(integer $Ttl) Set This parameter is disused.
 * @method integer getRetentionTime() Obtain This parameter is disused.
 * @method void setRetentionTime(integer $RetentionTime) Set This parameter is disused.
 * @method string getRemark() Obtain Remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
 * @method boolean getPublicAccessEnabled() Obtain Whether to enable the public network access
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) Set Whether to enable the public network access
 */
class ModifyRocketMQNamespaceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
     */
    public $NamespaceId;

    /**
     * @var integer This parameter is disused.
     */
    public $Ttl;

    /**
     * @var integer This parameter is disused.
     */
    public $RetentionTime;

    /**
     * @var string Remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @var boolean Whether to enable the public network access
     */
    public $PublicAccessEnabled;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
     * @param integer $Ttl This parameter is disused.
     * @param integer $RetentionTime This parameter is disused.
     * @param string $Remark Remarks (up to 128 characters)
     * @param boolean $PublicAccessEnabled Whether to enable the public network access
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

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("RetentionTime",$param) and $param["RetentionTime"] !== null) {
            $this->RetentionTime = $param["RetentionTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicAccessEnabled",$param) and $param["PublicAccessEnabled"] !== null) {
            $this->PublicAccessEnabled = $param["PublicAccessEnabled"];
        }
    }
}
