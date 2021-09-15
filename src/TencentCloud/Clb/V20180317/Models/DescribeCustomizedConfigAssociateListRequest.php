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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomizedConfigAssociateList request structure.
 *
 * @method string getUconfigId() Obtain Configuration ID.
 * @method void setUconfigId(string $UconfigId) Set Configuration ID.
 * @method integer getOffset() Obtain Start position of the binding list. Default: 0.
 * @method void setOffset(integer $Offset) Set Start position of the binding list. Default: 0.
 * @method integer getLimit() Obtain Number of binding lists to pull. Default: 20.
 * @method void setLimit(integer $Limit) Set Number of binding lists to pull. Default: 20.
 * @method string getDomain() Obtain Searches for the domain name.
 * @method void setDomain(string $Domain) Set Searches for the domain name.
 */
class DescribeCustomizedConfigAssociateListRequest extends AbstractModel
{
    /**
     * @var string Configuration ID.
     */
    public $UconfigId;

    /**
     * @var integer Start position of the binding list. Default: 0.
     */
    public $Offset;

    /**
     * @var integer Number of binding lists to pull. Default: 20.
     */
    public $Limit;

    /**
     * @var string Searches for the domain name.
     */
    public $Domain;

    /**
     * @param string $UconfigId Configuration ID.
     * @param integer $Offset Start position of the binding list. Default: 0.
     * @param integer $Limit Number of binding lists to pull. Default: 20.
     * @param string $Domain Searches for the domain name.
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
        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
