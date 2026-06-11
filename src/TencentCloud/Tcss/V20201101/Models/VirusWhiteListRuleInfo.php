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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VirusWhiteListRuleInfo
 *
 * @method integer getId() Obtain <p>Allowlist ID.</p>
 * @method void setId(integer $Id) Set <p>Allowlist ID.</p>
 * @method array getMd5List() Obtain <p>MD5 allowlist content.</p>
 * @method void setMd5List(array $Md5List) Set <p>MD5 allowlist content.</p>
 * @method array getImageIds() Obtain <p>Image ID.</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image ID.</p>
 * @method integer getScope() Obtain <p>Scope.</p>
 * @method void setScope(integer $Scope) Set <p>Scope.</p>
 * @method integer getImageCount() Obtain <p>Number of images.</p>
 * @method void setImageCount(integer $ImageCount) Set <p>Number of images.</p>
 * @method integer getMd5Count() Obtain <p>MD5 count.</p>
 * @method void setMd5Count(integer $Md5Count) Set <p>MD5 count.</p>
 * @method string getRemark() Obtain <p>Mark.</p>
 * @method void setRemark(string $Remark) Set <p>Mark.</p>
 * @method string getInsertTime() Obtain <p>Insertion time.</p>
 * @method void setInsertTime(string $InsertTime) Set <p>Insertion time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 */
class VirusWhiteListRuleInfo extends AbstractModel
{
    /**
     * @var integer <p>Allowlist ID.</p>
     */
    public $Id;

    /**
     * @var array <p>MD5 allowlist content.</p>
     */
    public $Md5List;

    /**
     * @var array <p>Image ID.</p>
     */
    public $ImageIds;

    /**
     * @var integer <p>Scope.</p>
     */
    public $Scope;

    /**
     * @var integer <p>Number of images.</p>
     */
    public $ImageCount;

    /**
     * @var integer <p>MD5 count.</p>
     */
    public $Md5Count;

    /**
     * @var string <p>Mark.</p>
     */
    public $Remark;

    /**
     * @var string <p>Insertion time.</p>
     */
    public $InsertTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @param integer $Id <p>Allowlist ID.</p>
     * @param array $Md5List <p>MD5 allowlist content.</p>
     * @param array $ImageIds <p>Image ID.</p>
     * @param integer $Scope <p>Scope.</p>
     * @param integer $ImageCount <p>Number of images.</p>
     * @param integer $Md5Count <p>MD5 count.</p>
     * @param string $Remark <p>Mark.</p>
     * @param string $InsertTime <p>Insertion time.</p>
     * @param string $UpdateTime <p>Update time.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("Md5Count",$param) and $param["Md5Count"] !== null) {
            $this->Md5Count = $param["Md5Count"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
