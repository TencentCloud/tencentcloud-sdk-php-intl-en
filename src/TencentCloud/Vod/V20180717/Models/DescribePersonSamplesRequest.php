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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePersonSamples request structure.
 *
 * @method string getType() Obtain Pulled figure type. Valid values:
<li>UserDefine: custom figure library;</li>
<li>Default: default figure library.</li>

Default value: UserDefine (the custom figure library will be pulled.)
Note: the default figure library can be pulled only through "figure name" or "figure ID + figure name", and only one face image will be returned.
 * @method void setType(string $Type) Set Pulled figure type. Valid values:
<li>UserDefine: custom figure library;</li>
<li>Default: default figure library.</li>

Default value: UserDefine (the custom figure library will be pulled.)
Note: the default figure library can be pulled only through "figure name" or "figure ID + figure name", and only one face image will be returned.
 * @method array getPersonIds() Obtain Figure ID. Array length limit: 100.
 * @method void setPersonIds(array $PersonIds) Set Figure ID. Array length limit: 100.
 * @method array getNames() Obtain Figure name. Array length limit: 20.
 * @method void setNames(array $Names) Set Figure name. Array length limit: 20.
 * @method array getTags() Obtain Figure tag. Array length limit: 20.
 * @method void setTags(array $Tags) Set Figure tag. Array length limit: 20.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 100. Maximum value: 100.
 * @method integer getSubAppId() Obtain [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class DescribePersonSamplesRequest extends AbstractModel
{
    /**
     * @var string Pulled figure type. Valid values:
<li>UserDefine: custom figure library;</li>
<li>Default: default figure library.</li>

Default value: UserDefine (the custom figure library will be pulled.)
Note: the default figure library can be pulled only through "figure name" or "figure ID + figure name", and only one face image will be returned.
     */
    public $Type;

    /**
     * @var array Figure ID. Array length limit: 100.
     */
    public $PersonIds;

    /**
     * @var array Figure name. Array length limit: 20.
     */
    public $Names;

    /**
     * @var array Figure tag. Array length limit: 20.
     */
    public $Tags;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of entries to be returned. Default value: 100. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $Type Pulled figure type. Valid values:
<li>UserDefine: custom figure library;</li>
<li>Default: default figure library.</li>

Default value: UserDefine (the custom figure library will be pulled.)
Note: the default figure library can be pulled only through "figure name" or "figure ID + figure name", and only one face image will be returned.
     * @param array $PersonIds Figure ID. Array length limit: 100.
     * @param array $Names Figure name. Array length limit: 20.
     * @param array $Tags Figure tag. Array length limit: 20.
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of entries to be returned. Default value: 100. Maximum value: 100.
     * @param integer $SubAppId [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PersonIds",$param) and $param["PersonIds"] !== null) {
            $this->PersonIds = $param["PersonIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
