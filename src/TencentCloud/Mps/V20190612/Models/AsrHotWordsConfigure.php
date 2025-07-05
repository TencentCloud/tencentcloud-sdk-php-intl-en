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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle hotword parameter.
 *
 * @method string getSwitch() Obtain Hotword switch.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSwitch(string $Switch) Set Hotword switch.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLibraryId() Obtain Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLibraryId(string $LibraryId) Set Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AsrHotWordsConfigure extends AbstractModel
{
    /**
     * @var string Hotword switch.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Switch;

    /**
     * @var string Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LibraryId;

    /**
     * @param string $Switch Hotword switch.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LibraryId Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }
    }
}
