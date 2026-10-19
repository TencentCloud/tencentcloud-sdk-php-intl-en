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
 * Custom rule evaluation result.
 *
 * @method string getComplianceResourceId() Obtain Evaluated resource ID, which is 0 to 256 characters in length.
 * @method void setComplianceResourceId(string $ComplianceResourceId) Set Evaluated resource ID, which is 0 to 256 characters in length.
 * @method string getComplianceResourceType() Obtain Evaluated resource type.
Support
QCS::CVM::Instance, QCS::CBS::Disk,QCS::VPC::Vpc,QCS::VPC::Subnet,QCS::VPC::SecurityGroup, QCS::CAM::User,QCS::CAM::Group,QCS::CAM::Policy,QCS::CAM::Role,QCS::COS::Bucket
 * @method void setComplianceResourceType(string $ComplianceResourceType) Set Evaluated resource type.
Support
QCS::CVM::Instance, QCS::CBS::Disk,QCS::VPC::Vpc,QCS::VPC::Subnet,QCS::VPC::SecurityGroup, QCS::CAM::User,QCS::CAM::Group,QCS::CAM::Policy,QCS::CAM::Role,QCS::COS::Bucket
 * @method string getComplianceRegion() Obtain Evaluated resource region.
0 to 32 characters in length.
 * @method void setComplianceRegion(string $ComplianceRegion) Set Evaluated resource region.
0 to 32 characters in length.
 * @method string getComplianceType() Obtain Compliance type. Value:
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
 * @method void setComplianceType(string $ComplianceType) Set Compliance type. Value:
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
 * @method Annotation getAnnotation() Obtain Supplementary information of non-compliant resources.
 * @method void setAnnotation(Annotation $Annotation) Set Supplementary information of non-compliant resources.
 */
class Evaluation extends AbstractModel
{
    /**
     * @var string Evaluated resource ID, which is 0 to 256 characters in length.
     */
    public $ComplianceResourceId;

    /**
     * @var string Evaluated resource type.
Support
QCS::CVM::Instance, QCS::CBS::Disk,QCS::VPC::Vpc,QCS::VPC::Subnet,QCS::VPC::SecurityGroup, QCS::CAM::User,QCS::CAM::Group,QCS::CAM::Policy,QCS::CAM::Role,QCS::COS::Bucket
     */
    public $ComplianceResourceType;

    /**
     * @var string Evaluated resource region.
0 to 32 characters in length.
     */
    public $ComplianceRegion;

    /**
     * @var string Compliance type. Value:
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
     */
    public $ComplianceType;

    /**
     * @var Annotation Supplementary information of non-compliant resources.
     */
    public $Annotation;

    /**
     * @param string $ComplianceResourceId Evaluated resource ID, which is 0 to 256 characters in length.
     * @param string $ComplianceResourceType Evaluated resource type.
Support
QCS::CVM::Instance, QCS::CBS::Disk,QCS::VPC::Vpc,QCS::VPC::Subnet,QCS::VPC::SecurityGroup, QCS::CAM::User,QCS::CAM::Group,QCS::CAM::Policy,QCS::CAM::Role,QCS::COS::Bucket
     * @param string $ComplianceRegion Evaluated resource region.
0 to 32 characters in length.
     * @param string $ComplianceType Compliance type. Value:
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
     * @param Annotation $Annotation Supplementary information of non-compliant resources.
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
