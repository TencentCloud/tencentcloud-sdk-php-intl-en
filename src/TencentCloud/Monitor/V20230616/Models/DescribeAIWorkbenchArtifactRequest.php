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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIWorkbenchArtifact request structure.
 *
 * @method string getArtifactId() Obtain <p>Product ID</p>
 * @method void setArtifactId(string $ArtifactId) Set <p>Product ID</p>
 * @method integer getNeedDownloadURL() Obtain <p>Whether to download the URL</p><p><code>1</code> = required, <code>0</code> or not passed = not required</p>
 * @method void setNeedDownloadURL(integer $NeedDownloadURL) Set <p>Whether to download the URL</p><p><code>1</code> = required, <code>0</code> or not passed = not required</p>
 */
class DescribeAIWorkbenchArtifactRequest extends AbstractModel
{
    /**
     * @var string <p>Product ID</p>
     */
    public $ArtifactId;

    /**
     * @var integer <p>Whether to download the URL</p><p><code>1</code> = required, <code>0</code> or not passed = not required</p>
     */
    public $NeedDownloadURL;

    /**
     * @param string $ArtifactId <p>Product ID</p>
     * @param integer $NeedDownloadURL <p>Whether to download the URL</p><p><code>1</code> = required, <code>0</code> or not passed = not required</p>
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
        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }

        if (array_key_exists("NeedDownloadURL",$param) and $param["NeedDownloadURL"] !== null) {
            $this->NeedDownloadURL = $param["NeedDownloadURL"];
        }
    }
}
