/**
 *#if (${TYPE_HINT} == "bool") Determines if the ${CLASS_NAME} is #else Returns the #end${FIELD_NAME}.
 *
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${GET_OR_IS}${NAME}()#if(${RETURN_TYPE}): ${RETURN_TYPE}#else#end
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
#if (${TYPE_HINT} == "bool")
/**
 * Returns the ${FIELD_NAME} flag.
 *
 * Alias method for is${NAME}().
 *
 * @return ${TYPE_HINT}
 */
public ${STATIC} function get${NAME}()#if(${RETURN_TYPE}): ${RETURN_TYPE}#else#end
{
#if (${STATIC} == "static")
    return self::is${NAME}();
#else
    return $this->is${NAME}();
#end
}
#end