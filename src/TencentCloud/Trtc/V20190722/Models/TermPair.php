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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Glossary phrase pairs for transcription
 *
 * @method string getSource() Obtain <p>Source terms.</p>
 * @method void setSource(string $Source) Set <p>Source terms.</p>
 * @method string getTarget() Obtain <p>Translated terms in target language.</p>
 * @method void setTarget(string $Target) Set <p>Translated terms in target language.</p>
 */
class TermPair extends AbstractModel
{
    /**
     * @var string <p>Source terms.</p>
     */
    public $Source;

    /**
     * @var string <p>Translated terms in target language.</p>
     */
    public $Target;

    /**
     * @param string $Source <p>Source terms.</p>
     * @param string $Target <p>Translated terms in target language.</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
