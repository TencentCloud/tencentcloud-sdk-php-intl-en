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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOrgServiceAssignMember request structure.
 *
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method integer getLimit() Obtain Limit. Value range: 1-50. Default value: 10.
 * @method void setLimit(integer $Limit) Set Limit. Value range: 1-50. Default value: 10.
 * @method integer getServiceId() Obtain Organization service ID, which can be obtained through [ListOrganizationService](https://intl.cloud.tencent.com/document/product/850/109561?from_cn_redirect=1).
 * @method void setServiceId(integer $ServiceId) Set Organization service ID, which can be obtained through [ListOrganizationService](https://intl.cloud.tencent.com/document/product/850/109561?from_cn_redirect=1).
 */
class ListOrgServiceAssignMemberRequest extends AbstractModel
{
    /**
     * @var integer Offset. Its value must be an integer multiple of the limit. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit. Value range: 1-50. Default value: 10.
     */
    public $Limit;

    /**
     * @var integer Organization service ID, which can be obtained through [ListOrganizationService](https://intl.cloud.tencent.com/document/product/850/109561?from_cn_redirect=1).
     */
    public $ServiceId;

    /**
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param integer $Limit Limit. Value range: 1-50. Default value: 10.
     * @param integer $ServiceId Organization service ID, which can be obtained through [ListOrganizationService](https://intl.cloud.tencent.com/document/product/850/109561?from_cn_redirect=1).
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
