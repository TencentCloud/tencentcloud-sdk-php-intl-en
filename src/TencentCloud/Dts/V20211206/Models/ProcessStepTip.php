<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object of the error or warning information
 *
 * @method string getMessage() Obtain Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSolution() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSolution(string $Solution) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHelpDoc() Obtain Help document
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHelpDoc(string $HelpDoc) Set Help document
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProcessStepTip extends AbstractModel
{
    /**
     * @var string Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Solution;

    /**
     * @var string Help document
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HelpDoc;

    /**
     * @param string $Message Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Solution Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HelpDoc Help document
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
