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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The usage of document splitting task.
 *
 * @method integer getPageNumber() Obtain Page number of the document splitting task.
 * @method void setPageNumber(integer $PageNumber) Set Page number of the document splitting task.
 * @method integer getTotalToken() Obtain Total number of tokens consumed by the document splitting task.
 * @method void setTotalToken(integer $TotalToken) Set Total number of tokens consumed by the document splitting task.
 * @method integer getTotalTokens() Obtain Total number of tokens consumed by the document splitting task.
 * @method void setTotalTokens(integer $TotalTokens) Set Total number of tokens consumed by the document splitting task.
 */
class DocumentUsage extends AbstractModel
{
    /**
     * @var integer Page number of the document splitting task.
     */
    public $PageNumber;

    /**
     * @var integer Total number of tokens consumed by the document splitting task.
     * @deprecated
     */
    public $TotalToken;

    /**
     * @var integer Total number of tokens consumed by the document splitting task.
     */
    public $TotalTokens;

    /**
     * @param integer $PageNumber Page number of the document splitting task.
     * @param integer $TotalToken Total number of tokens consumed by the document splitting task.
     * @param integer $TotalTokens Total number of tokens consumed by the document splitting task.
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
