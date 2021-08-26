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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateApplicationPackageDownloadUrl request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getPkgName() Obtain Package name
 * @method void setPkgName(string $PkgName) Set Package name
 * @method string getDeployVersion() Obtain Version of the package to download
 * @method void setDeployVersion(string $DeployVersion) Set Version of the package to download
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 */
class GenerateApplicationPackageDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Package name
     */
    public $PkgName;

    /**
     * @var string Version of the package to download
     */
    public $DeployVersion;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @param string $ApplicationId Application ID
     * @param string $PkgName Package name
     * @param string $DeployVersion Version of the package to download
     * @param integer $SourceChannel Source channel
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
