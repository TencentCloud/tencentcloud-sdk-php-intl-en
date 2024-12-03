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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom rule evaluation result
 *
 * @method string getComplianceResourceId() Obtain Evaluated resource id. It can contain 0 to 256 characters.
 * @method void setComplianceResourceId(string $ComplianceResourceId) Set Evaluated resource id. It can contain 0 to 256 characters.
 * @method string getComplianceResourceType() Obtain Evaluated resource type.
Supported:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
 * @method void setComplianceResourceType(string $ComplianceResourceType) Set Evaluated resource type.
Supported:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
 * @method string getComplianceRegion() Obtain Evaluated resource region.
It can contain 0 to 32 characters.
 * @method void setComplianceRegion(string $ComplianceRegion) Set Evaluated resource region.
It can contain 0 to 32 characters.
 * @method string getComplianceType() Obtain Compliance type. Valid values:
COMPLIANT: Compliant,
NON_COMPLIANT: Non-compliant
 * @method void setComplianceType(string $ComplianceType) Set Compliance type. Valid values:
COMPLIANT: Compliant,
NON_COMPLIANT: Non-compliant
 * @method Annotation getAnnotation() Obtain Supplementary information for non-compliant resources.
 * @method void setAnnotation(Annotation $Annotation) Set Supplementary information for non-compliant resources.
 */
class Evaluation extends AbstractModel
{
    /**
     * @var string Evaluated resource id. It can contain 0 to 256 characters.
     */
    public $ComplianceResourceId;

    /**
     * @var string Evaluated resource type.
Supported:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
     */
    public $ComplianceResourceType;

    /**
     * @var string Evaluated resource region.
It can contain 0 to 32 characters.
     */
    public $ComplianceRegion;

    /**
     * @var string Compliance type. Valid values:
COMPLIANT: Compliant,
NON_COMPLIANT: Non-compliant
     */
    public $ComplianceType;

    /**
     * @var Annotation Supplementary information for non-compliant resources.
     */
    public $Annotation;

    /**
     * @param string $ComplianceResourceId Evaluated resource id. It can contain 0 to 256 characters.
     * @param string $ComplianceResourceType Evaluated resource type.
Supported:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
     * @param string $ComplianceRegion Evaluated resource region.
It can contain 0 to 32 characters.
     * @param string $ComplianceType Compliance type. Valid values:
COMPLIANT: Compliant,
NON_COMPLIANT: Non-compliant
     * @param Annotation $Annotation Supplementary information for non-compliant resources.
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
        if (array_key_exists("ComplianceResourceId",$param) and $param["ComplianceResourceId"] !== null) {
            $this->ComplianceResourceId = $param["ComplianceResourceId"];
        }

        if (array_key_exists("ComplianceResourceType",$param) and $param["ComplianceResourceType"] !== null) {
            $this->ComplianceResourceType = $param["ComplianceResourceType"];
        }

        if (array_key_exists("ComplianceRegion",$param) and $param["ComplianceRegion"] !== null) {
            $this->ComplianceRegion = $param["ComplianceRegion"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }
    }
}
