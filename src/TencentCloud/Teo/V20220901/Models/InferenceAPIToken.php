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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reasoning API Token information.
 *
 * @method string getTokenId() Obtain Reasoning API Token ID.
 * @method void setTokenId(string $TokenId) Set Reasoning API Token ID.
 * @method string getName() Obtain Reasoning API Token name.
 * @method void setName(string $Name) Set Reasoning API Token name.
 * @method string getContent() Obtain Reasoning API Token content.
 * @method void setContent(string $Content) Set Reasoning API Token content.
 * @method string getCreateTime() Obtain Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class InferenceAPIToken extends AbstractModel
{
    /**
     * @var string Reasoning API Token ID.
     */
    public $TokenId;

    /**
     * @var string Reasoning API Token name.
     */
    public $Name;

    /**
     * @var string Reasoning API Token content.
     */
    public $Content;

    /**
     * @var string Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @param string $TokenId Reasoning API Token ID.
     * @param string $Name Reasoning API Token name.
     * @param string $Content Reasoning API Token content.
     * @param string $CreateTime Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
