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
 * Policy version list element structure
 *
 * @method integer getVersionId() Obtain Policy version ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersionId(integer $VersionId) Set Policy version ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateDate() Obtain Policy version creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateDate(string $CreateDate) Set Policy version creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDefaultVersion() Obtain Whether it is the operative version. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefaultVersion(integer $IsDefaultVersion) Set Whether it is the operative version. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PolicyVersionItem extends AbstractModel
{
    /**
     * @var integer Policy version ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VersionId;

    /**
     * @var string Policy version creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateDate;

    /**
     * @var integer Whether it is the operative version. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefaultVersion;

    /**
     * @param integer $VersionId Policy version ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateDate Policy version creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDefaultVersion Whether it is the operative version. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("IsDefaultVersion",$param) and $param["IsDefaultVersion"] !== null) {
            $this->IsDefaultVersion = $param["IsDefaultVersion"];
        }
    }
}
