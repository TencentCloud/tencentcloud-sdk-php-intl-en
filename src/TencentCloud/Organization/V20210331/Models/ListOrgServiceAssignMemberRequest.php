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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOrgServiceAssignMember request structure.
 *
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method integer getLimit() Obtain Limit. Value range: 1-50. Default value: 10.
 * @method void setLimit(integer $Limit) Set Limit. Value range: 1-50. Default value: 10.
 * @method integer getServiceId() Obtain Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method void setServiceId(integer $ServiceId) Set Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method string getProduct() Obtain Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method void setProduct(string $Product) Set Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
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
     * @var integer Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     */
    public $ServiceId;

    /**
     * @var string Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     */
    public $Product;

    /**
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param integer $Limit Limit. Value range: 1-50. Default value: 10.
     * @param integer $ServiceId Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     * @param string $Product Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
