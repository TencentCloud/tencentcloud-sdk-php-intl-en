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
 * Online search configuration (for international edition)
 *
 * @method string getApiKey() Obtain API key
 * @method void setApiKey(string $ApiKey) Set API key
 * @method boolean getEnabled() Obtain Whether enabled
 * @method void setEnabled(boolean $Enabled) Set Whether enabled
 * @method string getProvider() Obtain Service provider
 * @method void setProvider(string $Provider) Set Service provider
 * @method integer getTopN() Obtain Number of returned results.
 * @method void setTopN(integer $TopN) Set Number of returned results.
 */
class AppWebSearchConfig extends AbstractModel
{
    /**
     * @var string API key
     */
    public $ApiKey;

    /**
     * @var boolean Whether enabled
     */
    public $Enabled;

    /**
     * @var string Service provider
     */
    public $Provider;

    /**
     * @var integer Number of returned results.
     */
    public $TopN;

    /**
     * @param string $ApiKey API key
     * @param boolean $Enabled Whether enabled
     * @param string $Provider Service provider
     * @param integer $TopN Number of returned results.
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
        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }
    }
}
