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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ShareBlueprintAcrossAccounts request structure.
 *
 * @method string getBlueprintId() Obtain Image ID, which can be obtained through the BlueprintId returned by the [DescribeBlueprints](https://www.tencentcloud.comom/document/product/1207/47689?from_cn_redirect=1) API.
 * @method void setBlueprintId(string $BlueprintId) Set Image ID, which can be obtained through the BlueprintId returned by the [DescribeBlueprints](https://www.tencentcloud.comom/document/product/1207/47689?from_cn_redirect=1) API.
 * @method array getAccountIds() Obtain List of [account IDs](https://www.tencentcloud.comom/document/product/213/4944?from_cn_redirect=1#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id) that receive the shared images. The account ID is different from the QQ number. To query a user account ID, view the account ID column in the account information. The maximum number of accounts is 10.
 * @method void setAccountIds(array $AccountIds) Set List of [account IDs](https://www.tencentcloud.comom/document/product/213/4944?from_cn_redirect=1#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id) that receive the shared images. The account ID is different from the QQ number. To query a user account ID, view the account ID column in the account information. The maximum number of accounts is 10.
 */
class ShareBlueprintAcrossAccountsRequest extends AbstractModel
{
    /**
     * @var string Image ID, which can be obtained through the BlueprintId returned by the [DescribeBlueprints](https://www.tencentcloud.comom/document/product/1207/47689?from_cn_redirect=1) API.
     */
    public $BlueprintId;

    /**
     * @var array List of [account IDs](https://www.tencentcloud.comom/document/product/213/4944?from_cn_redirect=1#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id) that receive the shared images. The account ID is different from the QQ number. To query a user account ID, view the account ID column in the account information. The maximum number of accounts is 10.
     */
    public $AccountIds;

    /**
     * @param string $BlueprintId Image ID, which can be obtained through the BlueprintId returned by the [DescribeBlueprints](https://www.tencentcloud.comom/document/product/1207/47689?from_cn_redirect=1) API.
     * @param array $AccountIds List of [account IDs](https://www.tencentcloud.comom/document/product/213/4944?from_cn_redirect=1#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id) that receive the shared images. The account ID is different from the QQ number. To query a user account ID, view the account ID column in the account information. The maximum number of accounts is 10.
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            $this->AccountIds = $param["AccountIds"];
        }
    }
}
