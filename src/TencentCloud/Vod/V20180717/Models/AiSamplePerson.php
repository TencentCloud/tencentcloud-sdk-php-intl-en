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
 * AI sample management, figure information.
 *
 * @method string getPersonId() Obtain <p>Figure ID.</p>
 * @method void setPersonId(string $PersonId) Set <p>Figure ID.</p>
 * @method string getName() Obtain <p>Figure name.</p>
 * @method void setName(string $Name) Set <p>Figure name.</p>
 * @method string getDescription() Obtain <p>Character description.</p>
 * @method void setDescription(string $Description) Set <p>Character description.</p>
 * @method array getFaceInfoSet() Obtain <p>Face information.</p>
 * @method void setFaceInfoSet(array $FaceInfoSet) Set <p>Face information.</p>
 * @method array getTagSet() Obtain <p>Figure tag.</p>
 * @method void setTagSet(array $TagSet) Set <p>Figure tag.</p>
 * @method array getUsageSet() Obtain <p>Application scenarios.</p>
 * @method void setUsageSet(array $UsageSet) Set <p>Application scenarios.</p>
 * @method string getCreateTime() Obtain <p>Creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 */
class AiSamplePerson extends AbstractModel
{
    /**
     * @var string <p>Figure ID.</p>
     */
    public $PersonId;

    /**
     * @var string <p>Figure name.</p>
     */
    public $Name;

    /**
     * @var string <p>Character description.</p>
     */
    public $Description;

    /**
     * @var array <p>Face information.</p>
     */
    public $FaceInfoSet;

    /**
     * @var array <p>Figure tag.</p>
     */
    public $TagSet;

    /**
     * @var array <p>Application scenarios.</p>
     */
    public $UsageSet;

    /**
     * @var string <p>Creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @param string $PersonId <p>Figure ID.</p>
     * @param string $Name <p>Figure name.</p>
     * @param string $Description <p>Character description.</p>
     * @param array $FaceInfoSet <p>Face information.</p>
     * @param array $TagSet <p>Figure tag.</p>
     * @param array $UsageSet <p>Application scenarios.</p>
     * @param string $CreateTime <p>Creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FaceInfoSet",$param) and $param["FaceInfoSet"] !== null) {
            $this->FaceInfoSet = [];
            foreach ($param["FaceInfoSet"] as $key => $value){
                $obj = new AiSampleFaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfoSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("UsageSet",$param) and $param["UsageSet"] !== null) {
            $this->UsageSet = $param["UsageSet"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
