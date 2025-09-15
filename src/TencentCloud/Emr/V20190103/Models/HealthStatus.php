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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Process health status
 *
 * @method integer getCode() Obtain Running normally.
 * @method void setCode(integer $Code) Set Running normally.
 * @method string getText() Obtain Running normally.
 * @method void setText(string $Text) Set Running normally.
 * @method string getDesc() Obtain Running normally.
 * @method void setDesc(string $Desc) Set Running normally.
 */
class HealthStatus extends AbstractModel
{
    /**
     * @var integer Running normally.
     */
    public $Code;

    /**
     * @var string Running normally.
     */
    public $Text;

    /**
     * @var string Running normally.
     */
    public $Desc;

    /**
     * @param integer $Code Running normally.
     * @param string $Text Running normally.
     * @param string $Desc Running normally.
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
