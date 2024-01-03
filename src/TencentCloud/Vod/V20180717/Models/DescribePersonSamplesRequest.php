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
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getType() Obtain Type of samples to pull. Valid values:
<li>UserDefine: custom sample library</li>
<li>Default: default sample library</li>

Default value: UserDefine. Samples in the custom sample library will be pulled.
Note: samples from the default library can only be pulled by providing the name or both the ID and name of a sample. Only one face image will be returned.
 * @method void setType(string $Type) Set Type of samples to pull. Valid values:
<li>UserDefine: custom sample library</li>
<li>Default: default sample library</li>

Default value: UserDefine. Samples in the custom sample library will be pulled.
Note: samples from the default library can only be pulled by providing the name or both the ID and name of a sample. Only one face image will be returned.
 * @method array getPersonIds() Obtain IDs of samples. Array length limit: 100.
 * @method void setPersonIds(array $PersonIds) Set IDs of samples. Array length limit: 100.
 * @method array getNames() Obtain Names of samples. Array length limit: 20.
 * @method void setNames(array $Names) Set Names of samples. Array length limit: 20.
 * @method array getTags() Obtain Tags of a sample. Array length limit: 20.
 * @method void setTags(array $Tags) Set Tags of a sample. Array length limit: 20.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 100. Maximum value: 100.
 */
class DescribePersonSamplesRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Type of samples to pull. Valid values:
<li>UserDefine: custom sample library</li>
<li>Default: default sample library</li>

Default value: UserDefine. Samples in the custom sample library will be pulled.
Note: samples from the default library can only be pulled by providing the name or both the ID and name of a sample. Only one face image will be returned.
     */
    public $Type;

    /**
     * @var array IDs of samples. Array length limit: 100.
     */
    public $PersonIds;

    /**
     * @var array Names of samples. Array length limit: 20.
     */
    public $Names;

    /**
     * @var array Tags of a sample. Array length limit: 20.
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
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Type Type of samples to pull. Valid values:
<li>UserDefine: custom sample library</li>
<li>Default: default sample library</li>

Default value: UserDefine. Samples in the custom sample library will be pulled.
Note: samples from the default library can only be pulled by providing the name or both the ID and name of a sample. Only one face image will be returned.
     * @param array $PersonIds IDs of samples. Array length limit: 100.
     * @param array $Names Names of samples. Array length limit: 20.
     * @param array $Tags Tags of a sample. Array length limit: 20.
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of entries to be returned. Default value: 100. Maximum value: 100.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
    }
}
