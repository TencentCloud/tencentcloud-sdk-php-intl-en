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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseList request structure.
 *
 * @method array getFilters() Obtain Take the intersection when filtering with multiple conditions.
<li> LicenseStatus authorization status information: 0 - not used; 1 - partially used; 2 - used up; 3 - unavailable; 4 - available</li>
<li> BuyTime: time of purchase</li>
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>DeadlineStatus expiration status: NotExpired -not expired; expire - expired (including terminated); nearexpiry - about to expire</li>
<li>ResourceId resource ID</li>
<li>Keywords IP filtering</li>
<li>PayMode payment mode. 0: pay-as-you-go; 1: monthly subscription</li>
<li>OrderStatus order status. 1: normal; 2: isolated; 3: terminated</li>
<li>DealNames sub-order number, with a maximum length of 10, exceeding this will result in a failure.</li>
 * @method void setFilters(array $Filters) Set Take the intersection when filtering with multiple conditions.
<li> LicenseStatus authorization status information: 0 - not used; 1 - partially used; 2 - used up; 3 - unavailable; 4 - available</li>
<li> BuyTime: time of purchase</li>
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>DeadlineStatus expiration status: NotExpired -not expired; expire - expired (including terminated); nearexpiry - about to expire</li>
<li>ResourceId resource ID</li>
<li>Keywords IP filtering</li>
<li>PayMode payment mode. 0: pay-as-you-go; 1: monthly subscription</li>
<li>OrderStatus order status. 1: normal; 2: isolated; 3: terminated</li>
<li>DealNames sub-order number, with a maximum length of 10, exceeding this will result in a failure.</li>
 * @method integer getLimit() Obtain Limit number, 10 by default.
 * @method void setLimit(integer $Limit) Set Limit number, 10 by default.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method array getTags() Obtain Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
 * @method void setTags(array $Tags) Set Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
 */
class DescribeLicenseListRequest extends AbstractModel
{
    /**
     * @var array Take the intersection when filtering with multiple conditions.
<li> LicenseStatus authorization status information: 0 - not used; 1 - partially used; 2 - used up; 3 - unavailable; 4 - available</li>
<li> BuyTime: time of purchase</li>
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>DeadlineStatus expiration status: NotExpired -not expired; expire - expired (including terminated); nearexpiry - about to expire</li>
<li>ResourceId resource ID</li>
<li>Keywords IP filtering</li>
<li>PayMode payment mode. 0: pay-as-you-go; 1: monthly subscription</li>
<li>OrderStatus order status. 1: normal; 2: isolated; 3: terminated</li>
<li>DealNames sub-order number, with a maximum length of 10, exceeding this will result in a failure.</li>
     */
    public $Filters;

    /**
     * @var integer Limit number, 10 by default.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var array Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
     */
    public $Tags;

    /**
     * @param array $Filters Take the intersection when filtering with multiple conditions.
<li> LicenseStatus authorization status information: 0 - not used; 1 - partially used; 2 - used up; 3 - unavailable; 4 - available</li>
<li> BuyTime: time of purchase</li>
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>DeadlineStatus expiration status: NotExpired -not expired; expire - expired (including terminated); nearexpiry - about to expire</li>
<li>ResourceId resource ID</li>
<li>Keywords IP filtering</li>
<li>PayMode payment mode. 0: pay-as-you-go; 1: monthly subscription</li>
<li>OrderStatus order status. 1: normal; 2: isolated; 3: terminated</li>
<li>DealNames sub-order number, with a maximum length of 10, exceeding this will result in a failure.</li>
     * @param integer $Limit Limit number, 10 by default.
     * @param integer $Offset Offset, which is 0 by default.
     * @param array $Tags Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
