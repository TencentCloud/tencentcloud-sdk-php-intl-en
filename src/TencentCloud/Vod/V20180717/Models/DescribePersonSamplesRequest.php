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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePersonSamples request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getType() Obtain <p>Pulled material type. Available values:</p><li>UserDefine: user-customized material library;</li><li>Default: system default material library.</li><p>Default value: UserDefine, pull user-customized material library materials.<br>Description: If pulling the system default material library, you can only pull via material name or material ID + material name, and only one facial features image is returned.</p>
 * @method void setType(string $Type) Set <p>Pulled material type. Available values:</p><li>UserDefine: user-customized material library;</li><li>Default: system default material library.</li><p>Default value: UserDefine, pull user-customized material library materials.<br>Description: If pulling the system default material library, you can only pull via material name or material ID + material name, and only one facial features image is returned.</p>
 * @method array getPersonIds() Obtain <p>Material ID. Array length limit: 100.</p>
 * @method void setPersonIds(array $PersonIds) Set <p>Material ID. Array length limit: 100.</p>
 * @method array getNames() Obtain <p>Material name. Array length limit: 20.</p>
 * @method void setNames(array $Names) Set <p>Material name. Array length limit: 20.</p>
 * @method array getTags() Obtain <p>Material tag. Array length limit: 20.</p>
 * @method void setTags(array $Tags) Set <p>Material tag. Array length limit: 20.</p>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
 */
class DescribePersonSamplesRequest extends AbstractModel
{
    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Pulled material type. Available values:</p><li>UserDefine: user-customized material library;</li><li>Default: system default material library.</li><p>Default value: UserDefine, pull user-customized material library materials.<br>Description: If pulling the system default material library, you can only pull via material name or material ID + material name, and only one facial features image is returned.</p>
     */
    public $Type;

    /**
     * @var array <p>Material ID. Array length limit: 100.</p>
     */
    public $PersonIds;

    /**
     * @var array <p>Material name. Array length limit: 20.</p>
     */
    public $Names;

    /**
     * @var array <p>Material tag. Array length limit: 20.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in as the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $Type <p>Pulled material type. Available values:</p><li>UserDefine: user-customized material library;</li><li>Default: system default material library.</li><p>Default value: UserDefine, pull user-customized material library materials.<br>Description: If pulling the system default material library, you can only pull via material name or material ID + material name, and only one facial features image is returned.</p>
     * @param array $PersonIds <p>Material ID. Array length limit: 100.</p>
     * @param array $Names <p>Material name. Array length limit: 20.</p>
     * @param array $Tags <p>Material tag. Array length limit: 20.</p>
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
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
