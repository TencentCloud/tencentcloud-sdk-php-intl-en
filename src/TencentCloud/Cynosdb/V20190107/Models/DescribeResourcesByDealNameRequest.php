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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcesByDealName request structure.
 *
 * @method string getDealName() Obtain Billing order ID (if billing has not called back business delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, the business needs to retry the DescribeResourcesByDealName API until it succeeds).
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
 * @method void setDealName(string $DealName) Set Billing order ID (if billing has not called back business delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, the business needs to retry the DescribeResourcesByDealName API until it succeeds).
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
 * @method array getDealNames() Obtain List of billing order IDs. You can query the resource information for several order IDs in a single query. If billing has not yet called back the business for delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, retry the DescribeResourcesByDealName API until it succeeds.
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
 * @method void setDealNames(array $DealNames) Set List of billing order IDs. You can query the resource information for several order IDs in a single query. If billing has not yet called back the business for delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, retry the DescribeResourcesByDealName API until it succeeds.
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
 */
class DescribeResourcesByDealNameRequest extends AbstractModel
{
    /**
     * @var string Billing order ID (if billing has not called back business delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, the business needs to retry the DescribeResourcesByDealName API until it succeeds).
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
     */
    public $DealName;

    /**
     * @var array List of billing order IDs. You can query the resource information for several order IDs in a single query. If billing has not yet called back the business for delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, retry the DescribeResourcesByDealName API until it succeeds.
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
     */
    public $DealNames;

    /**
     * @param string $DealName Billing order ID (if billing has not called back business delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, the business needs to retry the DescribeResourcesByDealName API until it succeeds).
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
     * @param array $DealNames List of billing order IDs. You can query the resource information for several order IDs in a single query. If billing has not yet called back the business for delivery, the error code InvalidParameterValue.DealNameNotFound may occur. In this case, retry the DescribeResourcesByDealName API until it succeeds.
Enter at least one of DealName and DealNames. If both are entered, DealName takes precedence.
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }
    }
}
