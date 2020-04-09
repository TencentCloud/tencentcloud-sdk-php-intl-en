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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAttachedUserPolicies request structure.
 *
 * @method integer getTargetUin() Obtain Sub-account UIN
 * @method void setTargetUin(integer $TargetUin) Set Sub-account UIN
 * @method integer getPage() Obtain Page number, which starts from 1. Default is 1
 * @method void setPage(integer $Page) Set Page number, which starts from 1. Default is 1
 * @method integer getRp() Obtain Number of entries per page; 20 by default
 * @method void setRp(integer $Rp) Set Number of entries per page; 20 by default
 */
class ListAttachedUserPoliciesRequest extends AbstractModel
{
    /**
     * @var integer Sub-account UIN
     */
    public $TargetUin;

    /**
     * @var integer Page number, which starts from 1. Default is 1
     */
    public $Page;

    /**
     * @var integer Number of entries per page; 20 by default
     */
    public $Rp;

    /**
     * @param integer $TargetUin Sub-account UIN
     * @param integer $Page Page number, which starts from 1. Default is 1
     * @param integer $Rp Number of entries per page; 20 by default
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }
    }
}
