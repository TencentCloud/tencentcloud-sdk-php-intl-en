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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Spacer configuration.
 *
 * @method string getType() Obtain The vod type is valid, the content is valid starting time, Entire and SpecifyTimeRange are optional.
 * @method void setType(string $Type) Set The vod type is valid, the content is valid starting time, Entire and SpecifyTimeRange are optional.
 * @method integer getOffset() Obtain Offset, valid when Type is SpecifyTimeRange.
 * @method void setOffset(integer $Offset) Set Offset, valid when Type is SpecifyTimeRange.
 */
class ClipRangeInfo extends AbstractModel
{
    /**
     * @var string The vod type is valid, the content is valid starting time, Entire and SpecifyTimeRange are optional.
     */
    public $Type;

    /**
     * @var integer Offset, valid when Type is SpecifyTimeRange.
     */
    public $Offset;

    /**
     * @param string $Type The vod type is valid, the content is valid starting time, Entire and SpecifyTimeRange are optional.
     * @param integer $Offset Offset, valid when Type is SpecifyTimeRange.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
