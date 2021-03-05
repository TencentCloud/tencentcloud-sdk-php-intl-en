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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificateProject request structure.
 *
 * @method array getCertificateIdList() Obtain ID list of certificates whose projects need to be modified. A maximum of 100 certificate IDs are supported.
 * @method void setCertificateIdList(array $CertificateIdList) Set ID list of certificates whose projects need to be modified. A maximum of 100 certificate IDs are supported.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 */
class ModifyCertificateProjectRequest extends AbstractModel
{
    /**
     * @var array ID list of certificates whose projects need to be modified. A maximum of 100 certificate IDs are supported.
     */
    public $CertificateIdList;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @param array $CertificateIdList ID list of certificates whose projects need to be modified. A maximum of 100 certificate IDs are supported.
     * @param integer $ProjectId Project ID
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
        if (array_key_exists("CertificateIdList",$param) and $param["CertificateIdList"] !== null) {
            $this->CertificateIdList = $param["CertificateIdList"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
