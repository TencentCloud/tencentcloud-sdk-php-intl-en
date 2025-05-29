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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Search engine reference source index.
 *
 * @method integer getPosition() Obtain Reference source location.
 * @method void setPosition(integer $Position) Set Reference source location.
 * @method string getIndex() Obtain Reference source index sequence.
 * @method void setIndex(string $Index) Set Reference source index sequence.
 */
class QuoteInfo extends AbstractModel
{
    /**
     * @var integer Reference source location.
     */
    public $Position;

    /**
     * @var string Reference source index sequence.
     */
    public $Index;

    /**
     * @param integer $Position Reference source location.
     * @param string $Index Reference source index sequence.
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
        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
