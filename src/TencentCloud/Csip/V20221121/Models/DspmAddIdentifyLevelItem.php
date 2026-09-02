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
 * dspm data identification level info
 *
 * @method string getLevelName() Obtain <p>Level name</p>
 * @method void setLevelName(string $LevelName) Set <p>Level name</p>
 * @method integer getLevelScore() Obtain <p>Level sensitivity</p><p>Unit: points</p>
 * @method void setLevelScore(integer $LevelScore) Set <p>Level sensitivity</p><p>Unit: points</p>
 */
class DspmAddIdentifyLevelItem extends AbstractModel
{
    /**
     * @var string <p>Level name</p>
     */
    public $LevelName;

    /**
     * @var integer <p>Level sensitivity</p><p>Unit: points</p>
     */
    public $LevelScore;

    /**
     * @param string $LevelName <p>Level name</p>
     * @param integer $LevelScore <p>Level sensitivity</p><p>Unit: points</p>
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
        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }
    }
}
