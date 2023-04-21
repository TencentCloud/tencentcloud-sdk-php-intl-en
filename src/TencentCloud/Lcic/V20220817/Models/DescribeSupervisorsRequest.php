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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupervisors request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.

 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.

 * @method integer getLimit() Obtain The maximum number of records per page. The maximum value allowed is 100, and the default value is 20.
 * @method void setLimit(integer $Limit) Set The maximum number of records per page. The maximum value allowed is 100, and the default value is 20.
 * @method integer getPage() Obtain The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
 * @method void setPage(integer $Page) Set The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
 */
class DescribeSupervisorsRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.

     */
    public $SdkAppId;

    /**
     * @var integer The maximum number of records per page. The maximum value allowed is 100, and the default value is 20.
     */
    public $Limit;

    /**
     * @var integer The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
     */
    public $Page;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.

     * @param integer $Limit The maximum number of records per page. The maximum value allowed is 100, and the default value is 20.
     * @param integer $Page The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
