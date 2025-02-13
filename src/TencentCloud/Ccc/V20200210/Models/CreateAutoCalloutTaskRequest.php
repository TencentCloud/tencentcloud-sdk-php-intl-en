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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoCalloutTask request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getNotBefore() Obtain Task starting timestamp. unix second-level timestamp.
 * @method void setNotBefore(integer $NotBefore) Set Task starting timestamp. unix second-level timestamp.
 * @method array getCallees() Obtain List of called numbers.
 * @method void setCallees(array $Callees) Set List of called numbers.
 * @method array getCallers() Obtain List of calling numbers.
 * @method void setCallers(array $Callers) Set List of calling numbers.
 * @method integer getIvrId() Obtain IVR used for calling.
 * @method void setIvrId(integer $IvrId) Set IVR used for calling.
 * @method string getName() Obtain Task name.
 * @method void setName(string $Name) Set Task name.
 * @method string getDescription() Obtain <Task description>.
 * @method void setDescription(string $Description) Set <Task description>.
 * @method integer getNotAfter() Obtain Task stop timestamp. unix second-level timestamp.
 * @method void setNotAfter(integer $NotAfter) Set Task stop timestamp. unix second-level timestamp.
 * @method integer getTries() Obtain Maximum attempts, 1-3 times.
 * @method void setTries(integer $Tries) Set Maximum attempts, 1-3 times.
 * @method array getVariables() Obtain Custom variables (supported only in advanced versions).
 * @method void setVariables(array $Variables) Set Custom variables (supported only in advanced versions).
 * @method string getUUI() Obtain UUI
 * @method void setUUI(string $UUI) Set UUI
 * @method array getCalleeAttributes() Obtain Property of the called.
 * @method void setCalleeAttributes(array $CalleeAttributes) Set Property of the called.
 */
class CreateAutoCalloutTaskRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Task starting timestamp. unix second-level timestamp.
     */
    public $NotBefore;

    /**
     * @var array List of called numbers.
     */
    public $Callees;

    /**
     * @var array List of calling numbers.
     */
    public $Callers;

    /**
     * @var integer IVR used for calling.
     */
    public $IvrId;

    /**
     * @var string Task name.
     */
    public $Name;

    /**
     * @var string <Task description>.
     */
    public $Description;

    /**
     * @var integer Task stop timestamp. unix second-level timestamp.
     */
    public $NotAfter;

    /**
     * @var integer Maximum attempts, 1-3 times.
     */
    public $Tries;

    /**
     * @var array Custom variables (supported only in advanced versions).
     */
    public $Variables;

    /**
     * @var string UUI
     */
    public $UUI;

    /**
     * @var array Property of the called.
     */
    public $CalleeAttributes;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $NotBefore Task starting timestamp. unix second-level timestamp.
     * @param array $Callees List of called numbers.
     * @param array $Callers List of calling numbers.
     * @param integer $IvrId IVR used for calling.
     * @param string $Name Task name.
     * @param string $Description <Task description>.
     * @param integer $NotAfter Task stop timestamp. unix second-level timestamp.
     * @param integer $Tries Maximum attempts, 1-3 times.
     * @param array $Variables Custom variables (supported only in advanced versions).
     * @param string $UUI UUI
     * @param array $CalleeAttributes Property of the called.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("IvrId",$param) and $param["IvrId"] !== null) {
            $this->IvrId = $param["IvrId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("CalleeAttributes",$param) and $param["CalleeAttributes"] !== null) {
            $this->CalleeAttributes = [];
            foreach ($param["CalleeAttributes"] as $key => $value){
                $obj = new CalleeAttribute();
                $obj->deserialize($value);
                array_push($this->CalleeAttributes, $obj);
            }
        }
    }
}
