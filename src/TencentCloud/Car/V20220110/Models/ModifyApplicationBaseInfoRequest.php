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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationBaseInfo request structure.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method string getApplicationExePath() Obtain Application program execution path.
 * @method void setApplicationExePath(string $ApplicationExePath) Set Application program execution path.
 * @method string getApplicationInterList() Obtain Application process list.
 * @method void setApplicationInterList(string $ApplicationInterList) Set Application process list.
 * @method ApplicationBaseInfo getApplicationBaseInfo() Obtain Application basic data.
 * @method void setApplicationBaseInfo(ApplicationBaseInfo $ApplicationBaseInfo) Set Application basic data.
 * @method string getApplicationParams() Obtain Application startup parameters.
 * @method void setApplicationParams(string $ApplicationParams) Set Application startup parameters.
 * @method string getApplicationName() Obtain Application name.
 * @method void setApplicationName(string $ApplicationName) Set Application name.
 * @method array getApplicationStores() Obtain Application repository information list.
 * @method void setApplicationStores(array $ApplicationStores) Set Application repository information list.
 */
class ModifyApplicationBaseInfoRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ApplicationId;

    /**
     * @var string Application program execution path.
     */
    public $ApplicationExePath;

    /**
     * @var string Application process list.
     */
    public $ApplicationInterList;

    /**
     * @var ApplicationBaseInfo Application basic data.
     */
    public $ApplicationBaseInfo;

    /**
     * @var string Application startup parameters.
     */
    public $ApplicationParams;

    /**
     * @var string Application name.
     */
    public $ApplicationName;

    /**
     * @var array Application repository information list.
     */
    public $ApplicationStores;

    /**
     * @param string $ApplicationId Application ID.
     * @param string $ApplicationExePath Application program execution path.
     * @param string $ApplicationInterList Application process list.
     * @param ApplicationBaseInfo $ApplicationBaseInfo Application basic data.
     * @param string $ApplicationParams Application startup parameters.
     * @param string $ApplicationName Application name.
     * @param array $ApplicationStores Application repository information list.
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

        if (array_key_exists("ApplicationExePath",$param) and $param["ApplicationExePath"] !== null) {
            $this->ApplicationExePath = $param["ApplicationExePath"];
        }

        if (array_key_exists("ApplicationInterList",$param) and $param["ApplicationInterList"] !== null) {
            $this->ApplicationInterList = $param["ApplicationInterList"];
        }

        if (array_key_exists("ApplicationBaseInfo",$param) and $param["ApplicationBaseInfo"] !== null) {
            $this->ApplicationBaseInfo = new ApplicationBaseInfo();
            $this->ApplicationBaseInfo->deserialize($param["ApplicationBaseInfo"]);
        }

        if (array_key_exists("ApplicationParams",$param) and $param["ApplicationParams"] !== null) {
            $this->ApplicationParams = $param["ApplicationParams"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationStores",$param) and $param["ApplicationStores"] !== null) {
            $this->ApplicationStores = [];
            foreach ($param["ApplicationStores"] as $key => $value){
                $obj = new UserApplicationStore();
                $obj->deserialize($value);
                array_push($this->ApplicationStores, $obj);
            }
        }
    }
}
