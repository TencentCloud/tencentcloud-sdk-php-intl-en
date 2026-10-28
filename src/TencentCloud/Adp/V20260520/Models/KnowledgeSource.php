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
 * Knowledge source information
 *
 * @method boolean getIsBigData() Obtain <p>Whether it is big data</p>
 * @method void setIsBigData(boolean $IsBigData) Set <p>Whether it is big data</p>
 * @method boolean getIsShared() Obtain <p>Whether it is a shared knowledge base</p>
 * @method void setIsShared(boolean $IsShared) Set <p>Whether it is a shared knowledge base</p>
 * @method string getKbName() Obtain <p>Knowledge base name</p>
 * @method void setKbName(string $KbName) Set <p>Knowledge base name</p>
 */
class KnowledgeSource extends AbstractModel
{
    /**
     * @var boolean <p>Whether it is big data</p>
     */
    public $IsBigData;

    /**
     * @var boolean <p>Whether it is a shared knowledge base</p>
     */
    public $IsShared;

    /**
     * @var string <p>Knowledge base name</p>
     */
    public $KbName;

    /**
     * @param boolean $IsBigData <p>Whether it is big data</p>
     * @param boolean $IsShared <p>Whether it is a shared knowledge base</p>
     * @param string $KbName <p>Knowledge base name</p>
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
        if (array_key_exists("IsBigData",$param) and $param["IsBigData"] !== null) {
            $this->IsBigData = $param["IsBigData"];
        }

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }
    }
}
