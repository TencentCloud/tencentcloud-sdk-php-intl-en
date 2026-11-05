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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Usage information of the billing package
 *
 * @method integer getPackageType() Obtain <p>Package type</p><p>Enumeration values:</p><ul><li>1: Free edition</li><li>2: Pro edition</li><li>3: Enterprise edition</li></ul>
 * @method void setPackageType(integer $PackageType) Set <p>Package type</p><p>Enumeration values:</p><ul><li>1: Free edition</li><li>2: Pro edition</li><li>3: Enterprise edition</li></ul>
 * @method integer getResourceTotal() Obtain <p>Total resource package quantity</p>
 * @method void setResourceTotal(integer $ResourceTotal) Set <p>Total resource package quantity</p>
 * @method float getResourceUsage() Obtain <p>Resource package usage</p>
 * @method void setResourceUsage(float $ResourceUsage) Set <p>Resource package usage</p>
 * @method float getKnowledgeCapacity() Obtain <p>Knowledge base capacity.</p>
 * @method void setKnowledgeCapacity(float $KnowledgeCapacity) Set <p>Knowledge base capacity.</p>
 * @method float getKnowledgeUsage() Obtain <p>Knowledge base amount</p>
 * @method void setKnowledgeUsage(float $KnowledgeUsage) Set <p>Knowledge base amount</p>
 * @method integer getResourceStatus() Obtain <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Normal</li><li>3: Expired</li><li>4: About to expire</li></ul>
 * @method void setResourceStatus(integer $ResourceStatus) Set <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Normal</li><li>3: Expired</li><li>4: About to expire</li></ul>
 */
class ResourcePackageInfo extends AbstractModel
{
    /**
     * @var integer <p>Package type</p><p>Enumeration values:</p><ul><li>1: Free edition</li><li>2: Pro edition</li><li>3: Enterprise edition</li></ul>
     */
    public $PackageType;

    /**
     * @var integer <p>Total resource package quantity</p>
     */
    public $ResourceTotal;

    /**
     * @var float <p>Resource package usage</p>
     */
    public $ResourceUsage;

    /**
     * @var float <p>Knowledge base capacity.</p>
     */
    public $KnowledgeCapacity;

    /**
     * @var float <p>Knowledge base amount</p>
     */
    public $KnowledgeUsage;

    /**
     * @var integer <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Normal</li><li>3: Expired</li><li>4: About to expire</li></ul>
     */
    public $ResourceStatus;

    /**
     * @param integer $PackageType <p>Package type</p><p>Enumeration values:</p><ul><li>1: Free edition</li><li>2: Pro edition</li><li>3: Enterprise edition</li></ul>
     * @param integer $ResourceTotal <p>Total resource package quantity</p>
     * @param float $ResourceUsage <p>Resource package usage</p>
     * @param float $KnowledgeCapacity <p>Knowledge base capacity.</p>
     * @param float $KnowledgeUsage <p>Knowledge base amount</p>
     * @param integer $ResourceStatus <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Normal</li><li>3: Expired</li><li>4: About to expire</li></ul>
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ResourceTotal",$param) and $param["ResourceTotal"] !== null) {
            $this->ResourceTotal = $param["ResourceTotal"];
        }

        if (array_key_exists("ResourceUsage",$param) and $param["ResourceUsage"] !== null) {
            $this->ResourceUsage = $param["ResourceUsage"];
        }

        if (array_key_exists("KnowledgeCapacity",$param) and $param["KnowledgeCapacity"] !== null) {
            $this->KnowledgeCapacity = $param["KnowledgeCapacity"];
        }

        if (array_key_exists("KnowledgeUsage",$param) and $param["KnowledgeUsage"] !== null) {
            $this->KnowledgeUsage = $param["KnowledgeUsage"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }
    }
}
