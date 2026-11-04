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
 * DescribeApp request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method integer getDomain() Obtain <p>Application domain: ADP_DOMAIN_DEV(1)=development domain, ADP_DOMAIN_PROD(2)=release domain. Enumeration values: 1: development domain, 2: production domain</p>
 * @method void setDomain(integer $Domain) Set <p>Application domain: ADP_DOMAIN_DEV(1)=development domain, ADP_DOMAIN_PROD(2)=release domain. Enumeration values: 1: development domain, 2: production domain</p>
 * @method FieldMask getFieldMask() Obtain <p>Field mask, specify the fields to return (return all fields if Paths is empty). Paths enumeration values: AppConfig (application configuration), SecretInfo (application key info), ShareUrlInfo (sharing link information), SpecialStatusInfo (special status information), SearchResourceStatus (search resource status), SharedKbList (list of shared knowledge bases referenced by the application), CorpShareConfig (corporate shared configuration), FileVolumeMountList (cloud disk mount list)</p>
 * @method void setFieldMask(FieldMask $FieldMask) Set <p>Field mask, specify the fields to return (return all fields if Paths is empty). Paths enumeration values: AppConfig (application configuration), SecretInfo (application key info), ShareUrlInfo (sharing link information), SpecialStatusInfo (special status information), SearchResourceStatus (search resource status), SharedKbList (list of shared knowledge bases referenced by the application), CorpShareConfig (corporate shared configuration), FileVolumeMountList (cloud disk mount list)</p>
 * @method integer getStatusType() Obtain <p>Specific status type (required when FieldMask includes SpecialStatusInfo). Enumeration values: 1: rollback status, 2: first-time import status</p>
 * @method void setStatusType(integer $StatusType) Set <p>Specific status type (required when FieldMask includes SpecialStatusInfo). Enumeration values: 1: rollback status, 2: first-time import status</p>
 */
class DescribeAppRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var integer <p>Application domain: ADP_DOMAIN_DEV(1)=development domain, ADP_DOMAIN_PROD(2)=release domain. Enumeration values: 1: development domain, 2: production domain</p>
     */
    public $Domain;

    /**
     * @var FieldMask <p>Field mask, specify the fields to return (return all fields if Paths is empty). Paths enumeration values: AppConfig (application configuration), SecretInfo (application key info), ShareUrlInfo (sharing link information), SpecialStatusInfo (special status information), SearchResourceStatus (search resource status), SharedKbList (list of shared knowledge bases referenced by the application), CorpShareConfig (corporate shared configuration), FileVolumeMountList (cloud disk mount list)</p>
     */
    public $FieldMask;

    /**
     * @var integer <p>Specific status type (required when FieldMask includes SpecialStatusInfo). Enumeration values: 1: rollback status, 2: first-time import status</p>
     */
    public $StatusType;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param integer $Domain <p>Application domain: ADP_DOMAIN_DEV(1)=development domain, ADP_DOMAIN_PROD(2)=release domain. Enumeration values: 1: development domain, 2: production domain</p>
     * @param FieldMask $FieldMask <p>Field mask, specify the fields to return (return all fields if Paths is empty). Paths enumeration values: AppConfig (application configuration), SecretInfo (application key info), ShareUrlInfo (sharing link information), SpecialStatusInfo (special status information), SearchResourceStatus (search resource status), SharedKbList (list of shared knowledge bases referenced by the application), CorpShareConfig (corporate shared configuration), FileVolumeMountList (cloud disk mount list)</p>
     * @param integer $StatusType <p>Specific status type (required when FieldMask includes SpecialStatusInfo). Enumeration values: 1: rollback status, 2: first-time import status</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("FieldMask",$param) and $param["FieldMask"] !== null) {
            $this->FieldMask = new FieldMask();
            $this->FieldMask->deserialize($param["FieldMask"]);
        }

        if (array_key_exists("StatusType",$param) and $param["StatusType"] !== null) {
            $this->StatusType = $param["StatusType"];
        }
    }
}
