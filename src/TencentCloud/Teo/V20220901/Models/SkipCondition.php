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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getSelector() Obtain 
 * @method void setSelector(string $Selector) Set 
 * @method string getMatchFromType() Obtain 
 * @method void setMatchFromType(string $MatchFromType) Set 
 * @method array getMatchFrom() Obtain 
 * @method void setMatchFrom(array $MatchFrom) Set 
 * @method string getMatchContentType() Obtain 
 * @method void setMatchContentType(string $MatchContentType) Set 
 * @method array getMatchContent() Obtain 
 * @method void setMatchContent(array $MatchContent) Set 
 */
class SkipCondition extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Selector;

    /**
     * @var string 
     */
    public $MatchFromType;

    /**
     * @var array 
     */
    public $MatchFrom;

    /**
     * @var string 
     */
    public $MatchContentType;

    /**
     * @var array 
     */
    public $MatchContent;

    /**
     * @param string $Type 
     * @param string $Selector 
     * @param string $MatchFromType 
     * @param array $MatchFrom 
     * @param string $MatchContentType 
     * @param array $MatchContent 
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

        if (array_key_exists("Selector",$param) and $param["Selector"] !== null) {
            $this->Selector = $param["Selector"];
        }

        if (array_key_exists("MatchFromType",$param) and $param["MatchFromType"] !== null) {
            $this->MatchFromType = $param["MatchFromType"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchContentType",$param) and $param["MatchContentType"] !== null) {
            $this->MatchContentType = $param["MatchContentType"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
