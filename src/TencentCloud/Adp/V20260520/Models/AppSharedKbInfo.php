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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Brief information of the shared knowledge base referenced by the app (only ID and name are returned during queries)
 *
 * @method string getKbId() Obtain Shared knowledge base ID
 * @method void setKbId(string $KbId) Set Shared knowledge base ID
 * @method string getKbName() Obtain Name of the shared knowledge base
 * @method void setKbName(string $KbName) Set Name of the shared knowledge base
 */
class AppSharedKbInfo extends AbstractModel
{
    /**
     * @var string Shared knowledge base ID
     */
    public $KbId;

    /**
     * @var string Name of the shared knowledge base
     */
    public $KbName;

    /**
     * @param string $KbId Shared knowledge base ID
     * @param string $KbName Name of the shared knowledge base
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }
    }
}
