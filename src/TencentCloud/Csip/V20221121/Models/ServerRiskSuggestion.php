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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk details
 *
 * @method string getTitle() Obtain Risk title
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTitle(string $Title) Set Risk title
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getBody() Obtain Risk details
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBody(string $Body) Set Risk details
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class ServerRiskSuggestion extends AbstractModel
{
    /**
     * @var string Risk title
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Title;

    /**
     * @var string Risk details
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Body;

    /**
     * @param string $Title Risk title
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Body Risk details
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
